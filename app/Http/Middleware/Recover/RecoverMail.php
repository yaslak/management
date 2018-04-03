<?php

namespace App\Http\Middleware\Recover;

use Closure;
use App\Traits\Recovers\Recover as R;
use Illuminate\Support\Facades\Auth;

class RecoverMail
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
        $user = Auth::user();
        $recover = $this->recover($user);
        if (!$recover){
            return redirect()->route('recover.recover');
        }
        $mail = $this->token($user);
        if($mail != 0){
            return $next($request);
        }
        return redirect()->route('recoverSq.show');
    }

}
