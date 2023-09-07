<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Guru;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
{
    return view('auth.register');
}


public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
        'type' => 'required|in:siswa,guru', // Validasi tipe pengguna
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'type' => $request->type,
        'nik' => $request->nik,
        'nisn' => $request->nisn,
        'password' => Hash::make($request->password),
    ]);     

    if ($request->type === 'siswa') {
       $siswa = Siswa::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'nisn' => $request->nisn,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type,
           
        ]);

        $user->siswa()->save($siswa);
    } elseif ($request->type === 'guru') {
       $guru = Guru::create([
        'user_id' => $user->id,
        'name' => $request->name,
        'nik' => $request->nik,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'type' => $request->type,
        ]);

        $user->guru()->save($guru);
    } 

    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
}

}
