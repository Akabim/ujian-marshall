<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'ujians'; // Nama tabel yang berisi kolom 'jawaban'

    // Definisikan relasi dengan model Ujian
    public function ujian()
    {
        return $this->belongsTo(Ujian::class);
    }
}
