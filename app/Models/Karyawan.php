<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $guarded = [];
    protected $fillable = [
        'unit_id','nama_karyawan','jkel','nik'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class,'unit_id');
    }

    public function penilai()
    {
        return $this->hasMany(Penilai::class);
    }
}
