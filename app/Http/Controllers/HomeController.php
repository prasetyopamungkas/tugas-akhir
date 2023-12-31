<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use App\Models\makanan;
use App\Models\minuman;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $karyawanCount = karyawan::count();
        $makananCount = makanan::count();
        $minumanCount = minuman::count();

        return view('dashboard', compact('karyawanCount', 'makananCount', 'minumanCount'));
    }
}