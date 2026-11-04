<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingLetter extends Model
{
    use HasFactory;

    protected $table = 'incomingletters';

    protected $fillable = [
        'nomor_surat', 'tanggal', 'pengirim',
        'perihal', 'keterangan',
    ];
}