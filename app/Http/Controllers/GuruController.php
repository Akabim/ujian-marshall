<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Guru;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Registered;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guru.index', [
            'gurus' => Guru::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
    
    
        return redirect()->back()->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
