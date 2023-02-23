<?php

namespace App\Imports;

use App\Models\GameCredit;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithColumnLimit;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
class ParticipantsImport implements ToCollection,SkipsOnFailure,WithValidation, WithChunkReading, WithStartRow, SkipsEmptyRows,WithCalculatedFormulas, WithColumnLimit
{
    use Importable, SkipsFailures;
    public $totalRows = 0;
    private $errors = [];

    public function endColumn(): string
    {
        return 'G';
    }

    public function __construct($phase_id)
    {
        $this->phase_id = $phase_id;
    }

    public function collection(Collection $rows)
    {
        $rows = $rows->toArray();
        foreach ($rows as $key=>$row) {
            $validator = Validator::make($row, $this->rules(), $this->validationMessages());
            if ($validator->fails()) {
                foreach ($validator->errors()->messages() as $messages) {
                    foreach ($messages as $error) {
                        $this->errors[] = $error;
                    }
                }
            } else {
            $user = User::where('username', $row[4])->exists();
            if ($user == false) {
               if($row[6] == 'FUSION'){
                $group_type = 'fusion';
               } elseif($row[6] == 'GOURMET'){
                $group_type = 'gourmet';
                } elseif($row[6] == 'NOUVELLE CUISINE'){
                    $group_type = 'nouvelle_cuisine';
                }
                $user = User::create([
                    'name' => $row[2],
                    'surname' => $row[3],
                    'username' => $row[4],
                    'is_participant' => true,
                ]);
                Participant::create([
                    'agency_code' => $row[0],
                    'agency_name' => $row[1],
                    'group_type' => $group_type,
                    'user_id' => $user->id,
                ]);
            }
            if ($user == true) {
                $user = User::where('username', $row[4])->first();
                if($row[6] == 'FUSION'){
                    $group_type = 'fusion';
                } elseif($row[6] == 'GOURMET'){
                    $group_type = 'gourmet';
                } elseif($row[6] == 'NOUVELLE CUISINE') {
                    $group_type = 'nouvelle_cuisine';
                } else {
                    $group_type = null;
                }
                $user->update([
                    'is_participant' => true,
                    'name' => $row[2],
                    'surname' => $row[3],
                ]);
                Participant::updateOrCreate([
                    'user_id' => $user->id,
                ],[
                    'agency_code' => $row[0],
                    'agency_name' => $row[1],
                    'group_type' => $group_type,
                ]);
                $game = GameCredit::updateOrCreate(
                    [
                        'user_id' => $user->id,
                        'phase_id' => $this->phase_id,

                    ],
                    [
                        'user_id' => $user->id,
                        'game_credits' => $row[5],
                        'phase_id' => $this->phase_id,
                    ]
                );
            }
        }
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function rules(): array
    {
        return [
            '0' => 'required',
            '1' => 'required',
            '2' => 'required',
            '3' => 'required',
            '4' => 'required',
            '5' => 'required',
            '6' => 'required',
        ];
    }

    public function validationMessages()
    {
        return [
            '0.required' => 'Agency Code is required',
            '1.required' => 'Agency Name is required',
            '2.required' => 'First Name is required',
            '3.required' => 'Last Name is required',
            '4.required' => 'Username is required',
            '5.required' => 'Game Credits is required',
            '6.required' => 'Group Type is required',
        ];
    }

    public function startRow(): int
    {
        return 2;
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
