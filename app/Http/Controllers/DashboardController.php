<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Siswa;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
        public function index()
    {   
        $siswas = Siswa::all();
        return view('dashboard', compact('siswas'));
    }
}