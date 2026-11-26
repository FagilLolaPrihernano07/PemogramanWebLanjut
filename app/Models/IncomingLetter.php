<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IncomingLetter extends Model
{
    use HasFactory;

    protected $table = 'incomingletters';

    protected $fillable = [
        'nomor_surat', 'tanggal', 'pengirim',
        'perihal', 'keterangan',
        'category_id', 'lampiran',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}