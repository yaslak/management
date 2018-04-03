<?php

namespace App\Http\Middleware\Recover;

use App\Traits\Recovers\Recover as R;
use Closure;
use Illuminate\Support\Facades\Auth;

class Recover
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
            if ($recover){
                return redirect()->route('recoverMail.show');
            }
        }
        return $next($request);
    }
}
