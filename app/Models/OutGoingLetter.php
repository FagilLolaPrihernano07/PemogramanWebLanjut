<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutGoingLetter extends Model
{
    protected $table = 'outgoing_letters';
    protected $guarded = ['id'];
}
