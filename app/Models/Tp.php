<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tp extends Model
{
    protected $table = 'teori_pendahuluans';

    protected $fillable = [
        'judul',
        'sub_judul',
        'kategori',
        'deskripsi',
        'posted_at',
        'deadline_at',
    ];
}
