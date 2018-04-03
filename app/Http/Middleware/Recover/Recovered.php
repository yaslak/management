<?php

namespace App\Http\Middleware\Recover;

use App\Model\Recover\Recover;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Traits\Recovers\Recover as R;

class Recovered
{
    use R;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()){
            $user = Auth::user();
            $recover = $this->recover($user);
            if (!$recover){
                return redirect()->route('recover.recover');
            }
            $mail = $this->token($user);
            if($mail != 0){
                return redirect()->route('recoverMail.show');
            }
            $sq = $this->Qs($user);
            if(!$sq){
                return redirect()->route('recoverSq.show');
            }
        }
        return $next($request);
    }
}
