<?php

namespace App\Exports;

use App\Models\Prize;
use App\Models\PrizeList;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ParticipantExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

        public function headings():array{
            return[
                'Agency Code',
                'Agency Name',
                'Phase',
                'Total Game Credits',
                'No of game played',
                'Name',
                'Surname',
                'Username',
                'Prize Code',
                'Prize',
                'Group_type',
                'Has Won?',
                'Replay',
                'No Of Game Won',
                'Played At',
                'User Token',
                'Remote Id'
            ];
        }      

        public function collection (){
            $participant_logs = DB::table('users')->join('participants','participants.user_id','=','users.id')
            ->join('game_credits','game_credits.user_id','=','users.id')
            ->join('game_play_logs','game_play_logs.game_credit_id','=','game_credits.id')
            ->get();
           if($participant_logs->count() > 0){
                foreach($participant_logs as $logs){
                            if($logs->prize_code){
                                $prize_title = PrizeList::where('prize_code',$logs->prize_code)->first();
                                if($prize_title){
                                    $prize = $prize_title->title;
                                } else {
                                    $prize = '';
                                }
                            } else {
                                $prize = '';
                            }
                    $result[] = array(
                        'agency_code' => $logs->agency_code ?? '',
                        'agency_name' => $logs->agency_name ?? '',
                        'phase' => $logs->phase_id ?? '',
                        'total_game_credits' => $logs->game_credits ?? 0,
                        'no_of_game_played' => $logs->no_of_game_played ?? 0,
                        'name' => $logs->name ?? '',
                        'surname' => $logs->surname ?? '',
                        'username' => $logs->username ?? '',
                        'prize_code' => $logs->prize_code ?? '',
                        'prize' => $prize ?? '',
                        'group_type' => $logs->group_type ?? '',
                        'has_won' => $logs->has_won == 1 ? 'Yes' : 'No',
                        'replay' => $logs->replay == 1 ? 'Yes' : 'No',
                        'no_of_game_won' => $logs->no_of_game_won ?? 0,
                        'played_at' => $logs->created_at ?? '',
                        'user_token' => $logs->user_token ?? '',
                        'remote_id' => $logs->remote_id ?? '',
                    );
                }
            } else {
                    $result = [];
            }
            return collect($result);
        }

    }
   
