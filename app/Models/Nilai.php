<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory, Timestamp;
    protected $fillable = [
        'nilai', 'murid_id', 'mapel_id'
    ];
}
