<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan_15467';
    protected $fillable = [
        'nik',
        'tanggal',
        'user_id',
        'isi',
        'lokasi',
        'detail_lokasi',
        'foto',



    ];
    public function tanggapan()
    {
        return $this->belongsTo(pengaduan::class);
    }
}
