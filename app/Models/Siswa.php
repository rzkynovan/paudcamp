<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory, Timestamp;
    protected $fillable = [
        'name', 'tgl_lahir', 'tempat_lahir', 'no_hp', 'status', 'wali_id'
    ];
}
