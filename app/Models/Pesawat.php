<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesawat extends Model
{
    use HasFactory;

        // Relasi dengan tabel 'ujian'
        public function ujian()
        {
            return $this->hasMany(Ujian::class, 'id_pesawat');
        }
    
}
