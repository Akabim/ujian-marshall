<?php

namespace App\Models;
use App\Models\Ujian;
use App\Models\User;

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
        public function user()
        {
            return $this->belongsTo(User::class, 'id_guru');
        }
    
    

    
}
