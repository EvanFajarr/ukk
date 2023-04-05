<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class masyarakat extends Authenticatable
{
    use HasFactory;
    protected $table = 'masyarakat_15467';
    protected $fillable = [
        'nik',
        'name',
        'username',
        'email',
        'password',
        'tlp',


    ];
}
