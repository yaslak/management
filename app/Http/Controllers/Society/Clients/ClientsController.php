<?php

namespace App\Http\Controllers\Society\Clients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    public function index()
    {
        
        return view('society.clients.index');
    }
}
