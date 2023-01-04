<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table = 'penilaian';
    protected $guarded = [];
    protected $fillable = [
        'penilai_id',
        'periode',
        'skor1',
        'skor2',
        'skor3',
        'skor4',
        'skor5',
        'skor6',
        'skor7',
        'skor8',
        'tanggal_penilaian',
        'catatan_kesimpulan'
    ];

    public function penilai()
    {
        return $this->belongsTo(Penilai::class,'penilai_id');
    }

    // public function karyawan()
    // {
    //     return $this->hasMany(Karyawan::class);
    // }
}
