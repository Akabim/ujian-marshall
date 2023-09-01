<?php

namespace App\Models;

use App\Models\Ujian;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'nisn',
        'password',
        'email',
        'type',
        '$nilaiPersentase',
       
    ];

        // Relasi dengan tabel 'ujian'
        public function ujian()
        {
            return $this->hasMany(Ujian::class, 'id_siswa');
        }
    
        protected $casts = [
            // Properti lain yang ada dalam model
            '$nilaiPersentase' => 'float', // Tambahkan properti nilaiPersentase1
        ];
        
}
