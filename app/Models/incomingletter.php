<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomingLetter extends Model // Pastikan huruf kapital
{
    use HasFactory;

    protected $table = 'incomingletters'; // Sesuaikan dengan nama tabel di database Anda
    protected $guarded = ['id'];
}