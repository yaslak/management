<?php

namespace App\Http\Controllers\Auth\Recover;

use App\Http\Requests\Recover\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Auth;
use App\Traits\Recovers\Recover as RecoverTrait;

class MailController extends Controller
{
    use RecoverTrait;


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('recover.mail');
    }

    public function index(Mailer $mailer)
    {
        $user = Auth::user();
        return $this->mail($user,$this->token($user),$mailer,'le mail a été envoyer');
    }

    public function return(Mailer $mailer)
    {
        $user = Auth::user();
        return $this->mail($user,$this->token($user),$mailer);
    }

    public function mail($user, $token, $mailer)
    {
        //$this->send($user,$token,$mailer);
        Session()->flash('success',true);
        Session()->flash('success.title',trans('auth.mail_flash_title'));
        Session()->flash('success.content',trans('auth.mail_flash_content'));
        return view('recover.email')->with(compact('user'));
    }

    public function store(Mail $request)
    {
        $user = Auth::user();
        if($this->token($user) != $request->token){
           return back()->withErrors(['token'=>'invalide'])->withInput();
        }
        $user->recover()->update(['email'=>true, 'token' => false]);
        Session()->flash('success',true);
        Session()->flash('success.title',trans('auth.mail_flash_title'));
        Session()->flash('success.content',trans('auth.mail_flash_validate_content'));
        return redirect(url(route('recoverSq.show')));
    }

}
