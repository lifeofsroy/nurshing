<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrinciDesk extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
        'image',
    ];

    protected $table = "princi_desks";
}
