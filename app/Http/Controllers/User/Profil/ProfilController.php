<?php

namespace App\Http\Controllers\User\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index()
    {
        echo 'profil';
    }
    public function show()
    {
        return view('user.profil.show');
    }
}
