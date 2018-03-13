<?php

namespace App\Http\controllers\App;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index(User $user)
    {
        $info = $user->info;
        $user = Auth::user();
        return view('setting.setting',compact('user','info'));
    }
}
