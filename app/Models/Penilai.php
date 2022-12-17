<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilai extends Model
{
    use HasFactory;
    protected $table = 'penilai';
    protected $guarded = [];
    protected $fillable = [
        'karyawan_id','kode_penilai','nama_penilai'
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class,'karyawan_id');
    }
}
