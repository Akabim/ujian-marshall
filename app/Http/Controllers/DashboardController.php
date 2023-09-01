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
    $user = Auth::user();
    // dd(Siswa::get());
    if ($user->type === 'guru') {
        return view('guru.dashboard-guru', [
            'siswas' => Siswa::get(),
            'jawaban' => Jawaban::get(),
        ]);


    } elseif ($user->type === 'siswa') {
        return view('siswa.dashboard-siswa', [
            'siswas' => Siswa::get(),
            'jawaban' => Jawaban::get(),

        ]);
    }
}
}
