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
        'nilai_akhir1',
        'nilai_akhir2',
        'nilai_akhir3',
        'nilai_akhir4',
        'nilai_akhir5',
        'total_nilai_akhir',

    
       
    ];

        // Relasi dengan tabel 'ujian'
        public function ujians()
        {
            return $this->belongsTo(Ujian::class, 'id_siswa', 'name');
        }
    
        protected $casts = [
            // Properti lain yang ada dalam model
            '$nilaiPersentase' => 'float', // Tambahkan properti nilaiPersentase1
        ];
        
}
