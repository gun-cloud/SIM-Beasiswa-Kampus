<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $totalMahasiswa = Mahasiswa::count();
        $totalBeasiswa = Beasiswa::count();
        $totalPenerima = Mahasiswa::whereNotNull('id_beasiswa')->count();
        return view('admin.index', [
            'title' => 'Dashboard',
            'totalMahasiswa' => $totalMahasiswa,
            'totalBeasiswa' => $totalBeasiswa,
            'totalPenerima' => $totalPenerima,
        ]);
    }
}
