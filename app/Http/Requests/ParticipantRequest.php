<?php

namespace App\Http\Requests;

use App\Models\Phase;
use Illuminate\Foundation\Http\FormRequest;

class ParticipantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
            return [
                'usable_start_date' => 'required|date|after:today',
                'usable_end_date' => 'required|date|after:usable_start_date',
                'phase_id' => 'required|exists:phases,id',
                'participant_file' => 'required|mimes:csv,xlx,xls,xlsx,txt',
            ];
    }
    
}
