<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory, Timestamp;
    protected $fillable = [
        'name', 'kapasitas', 'guru_id', 'mapel_id', 'siswa_id'
    ];
}
