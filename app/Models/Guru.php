<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory, Timestamp;
    protected $fillable = [
        'name', 'nip', 'alamat', 'no_hp', 'email'
    ];
}
