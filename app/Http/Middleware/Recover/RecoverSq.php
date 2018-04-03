<?php

namespace App\Http\Middleware\Recover;

use App\Traits\Recovers\Recover;
use Closure;
use Illuminate\Support\Facades\Auth;

class RecoverSq
{
    use Recover;
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
            return redirect()->route('recoverMail.show');
        }
        if(!$this->Qs($user)){
            return $next($request);
        }
        Session()->flash('success.content',trans('auth.sq_flash_validate_content'));
        return redirect(url('/'),301);
    }
}
