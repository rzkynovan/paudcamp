<?php

namespace App\Models;

use App\Models\Wali;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory, Timestamp;
    protected $fillable = [
        'name', 'email', 'tgl_lahir', 'tempat_lahir', 'no_hp', 'status', 
    ];

    public $incrementing = false;

    /**
     * Get the Wali associated with the Siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Wali(): HasOne
    {
        return $this->hasOne(Wali::class, 'siswa_id', 'id');
    }
     
}
