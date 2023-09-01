<?php

namespace App\Http\Controllers;
use App\Models\Ujian;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\LevelPenguji;
use App\Models\Pesawat;
use App\Models\Bandara;
use App\Models\Cuaca;
use App\Models\Siswa;


class UjianController extends Controller
{
    public function index()
    {
        return view('ujian.dashboard', [
            'pertanyaan1' =>Pertanyaan::where('jenis_pertanyaan', 1)->get(),
            'pertanyaan2' =>Pertanyaan::where('jenis_pertanyaan', 2)->get(),
            'pertanyaan3' =>Pertanyaan::where('jenis_pertanyaan', 3)->get(),
            'level_penguji' =>LevelPenguji::get(),
            'pesawat' =>Pesawat::get(),
            'cuaca' =>Cuaca::get(),
            'bandara' =>Bandara::get(),
            'siswa' =>Siswa::get(),
        ]);
    }
    
    
    public function store(Request $request)
    {
        $jawaban = $request->input('jawaban');

        foreach ($jawaban as $pertanyaanId => $nilai) {
            Ujian::create([
                'id_guru' => auth()->user()->id, // Mengambil ID guru yang sedang login
                'id_level' => $request->input('id_level'),
                'id_siswa' => $request->input('id_siswa'),
                'id_pesawat' => $request->input('id_pesawat'),
                'id_bandara' => $request->input('id_bandara'),
                'id_cuaca' => $request->input('id_cuaca'),
                'id_pertanyaan' => $pertanyaanId,
                'jawaban' => $nilai,
            ]);
        }

        return redirect()->route('dashboard');
    }

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
