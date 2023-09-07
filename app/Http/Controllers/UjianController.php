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
use Illuminate\Database\Eloquent\Collection;

class UjianController extends Controller
{
    public function index()
    {   

        
        return view('ujian.dashboard', [
            'pertanyaan1' => Pertanyaan::where('jenis_pertanyaan', 1)->get(),
            'pertanyaan2' => Pertanyaan::where('jenis_pertanyaan', 2)->get(),
            'pertanyaan3' => Pertanyaan::where('jenis_pertanyaan', 3)->get(),
            'pertanyaan4' => Pertanyaan::where('jenis_pertanyaan', 4)->get(),
            'pertanyaan5' => Pertanyaan::where('jenis_pertanyaan', 5)->get(),
            'level_penguji' => LevelPenguji::get(),
            'pesawat' => Pesawat::get(),
            'cuaca' => Cuaca::get(),
            'bandara' => Bandara::get(),
            'siswa' => Siswa::get(),
            'ujian' => Ujian::get(),
            'title' => 'Ujian',
        ]);
    }
    
    public function store(Request $request)
    {
        $jawaban = $request->input('jawaban');

        // Inisialisasi array untuk menyimpan total penilaian per kolom nilai akhir
        $totalPenilaian = [
            'nilai_akhir1' => 0,
            'nilai_akhir2' => 0,
            'nilai_akhir3' => 0,
            'nilai_akhir4' => 0,
            'nilai_akhir5' => 0,
        ];

        foreach ($jawaban as $pertanyaanId => $nilai) {
            Ujian::create([
                'id_guru' => auth()->user()->name,
                'id_level' => $request->input('id_level'),
                'id_siswa' => $request->input('id_siswa'),
                'id_pesawat' => $request->input('id_pesawat'),
                'id_bandara' => $request->input('id_bandara'),
                'id_cuaca' => $request->input('id_cuaca'),
                'id_pertanyaan' => $pertanyaanId,
                'jawaban' => $nilai,
            ]);

            // Menghitung total penilaian per kolom nilai akhir
            if ($pertanyaanId >= 1 && $pertanyaanId <= 8) {
                $totalPenilaian['nilai_akhir1'] += ($nilai * 2.5);
            } elseif ($pertanyaanId >= 9 && $pertanyaanId <= 12) {
                $totalPenilaian['nilai_akhir2'] += ($nilai * 5);
            } elseif ($pertanyaanId >= 13 && $pertanyaanId <= 26) {
                $totalPenilaian['nilai_akhir3'] += ($nilai * 1.8);
            } elseif ($pertanyaanId >= 27 && $pertanyaanId <= 37) {
                $totalPenilaian['nilai_akhir4'] += ($nilai * 2.2727);
            } elseif ($pertanyaanId >= 38 && $pertanyaanId <= 39) {
                $totalPenilaian['nilai_akhir5'] += ($nilai * 5);
            }
        }

        // Misalkan kita memiliki data siswa yang relevan. Di sini, Anda harus menggantinya dengan cara yang sesuai.
        $siswa = Siswa::find($request->input('id_siswa'));

        // Update kolom nilai akhir sesuai dengan hasil perhitungan
        foreach ($totalPenilaian as $kolomNilaiAkhir => $nilai) {
            $siswa->$kolomNilaiAkhir = round($nilai);
        }

        // Hitung total nilai akhir
        $totalNilaiAkhir = array_sum($totalPenilaian);
        $totalNilaiAkhir = round($totalNilaiAkhir);


        // Simpan total nilai akhir pada kolom 'total_nilai_akhir' pada objek siswa
        $siswa->total_nilai = $totalNilaiAkhir;

        // Simpan perubahan pada data siswa
        $siswa->save();

        return redirect()->route('dashboard');
    }

    public function show($id_siswa)
    {
        $ujian = Ujian::where('id_siswa', $id_siswa)->get();
        $siswa = Siswa::find($id_siswa);

    return view('ujian.detail', [
        'ujian' => $ujian,
        'siswa' => $siswa,
        'level_penguji' => LevelPenguji::get(),
        'pesawat' => Pesawat::get(),
        'cuaca' => Cuaca::get(),
        'bandara' => Bandara::get(),
    ]);
    }

}
