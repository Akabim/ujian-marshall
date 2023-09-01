<?php

namespace App\Models;

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
}
