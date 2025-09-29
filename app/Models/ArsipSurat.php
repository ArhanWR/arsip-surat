<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArsipSurat extends Model
{
    protected $table = 'arsip_surat';
    protected $fillable = [
        'nomor_surat',
        'kategori',
        'judul',
        'file',
    ];
}