<?php

namespace App\Models;

use App\Models\Siswa;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wali extends Model
{
    use HasFactory, Timestamp;
    protected $fillable = [
        'name', 'alamat', 'tgl_lahir', 'tempat_lahir', 'email', 'no_hp', 'siswa_id'
    ];

    /**
     * Get the Siswa that owns the Wali
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }
}
