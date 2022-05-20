<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory, Timestamp;
    protected $fillable = [
        'name', 'alamat', 'tgl_lahir', 'tempat_lahir', 'email', 'no_hp'
    ];
}
