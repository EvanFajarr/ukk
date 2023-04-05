<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    use HasFactory;
    protected $fillable = ['pengaduan_id', 'user_id', 'tanggapan'];
    protected $guarded = ['id'];
    protected $table = 'tanggapan_15467';

    public function pengaduan()
    {
        return $this->belongsTo(tanggapan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
