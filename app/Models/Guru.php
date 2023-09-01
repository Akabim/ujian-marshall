<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'nik',
        'password',
        'email',
        'type',
       
    ];

        // Relasi dengan tabel 'ujian'
        public function ujian()
        {
            return $this->hasMany(Ujian::class, 'id_guru');
        }
    
    

    
}
