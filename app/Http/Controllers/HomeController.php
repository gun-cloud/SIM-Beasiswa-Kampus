<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'beasiswas' => Beasiswa::all()
        ]);
    }
    public function login()
    {
        return view('login');
    }
}
