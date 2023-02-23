<?php

namespace App\Http\Middleware;

use App\Models\GameCredit;
use App\Models\Phase;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class PlayablePeriod
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $phase = Phase::currentPhase()->first();
        if(!$phase){
            return problem(__('play.failed'), 403, "Playing period has not started yet.");
        }
        $game_credit = GameCredit::where('phase_id', $phase->id)->where('user_id', auth()->id())->first();
        if(!$game_credit){
            return problem(__('play.failed'), 403, "You are not allowed to play this game.");
        }
        if($game_credit && $game_credit->game_credits < $game_credit->no_of_game_played){
            return problem(__('play.failed'), 403, "You have no credit to play.");
        }
        return $next($request);
    }
}
