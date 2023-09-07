<?php

namespace App\Models;

use App\Models\Bandara;
use App\Models\Cuaca;
use App\Models\Guru;    
use App\Models\LevelPenguji;
use App\Models\Pesawat;
use App\Models\Pertanyaan;
use App\Models\Siswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_guru',
        'id_level',
        'id_siswa',
        'id_pesawat',
        'id_bandara',
        'id_cuaca',
        'id_pertanyaan',
        'jawaban', 
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }
    

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru', 'id');
    }

    public function level()
    {
        return $this->belongsTo(LevelPenguji::class, 'id_level', 'id');
    }   

    public function pesawat()
    {
        return $this->belongsTo(Pesawat::class, 'id_pesawat', 'id');
    }

    public function bandara()
    {
        return $this->belongsTo(Bandara::class, 'id_bandara', 'id');
    }

    public function cuaca()
    {
        return $this->belongsTo(Cuaca::class, 'id_cuaca', 'id');
    }

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan', 'id');
    }

}
