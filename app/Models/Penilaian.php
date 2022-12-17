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
        'penilai_id','periode',
        'skor1','catatan1',
        'skor2','catatan2',
        'skor3','catatan3',
        'skor4','catatan4',
        'skor5','catatan5',
        'skor6','catatan6',
        'skor7','catatan7',
        'skor8','catatan8'
    ];
}
