<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    use HasFactory;

    protected $fillable = [
        'wh_active',
        'ph_active',
        'wh_num',
        'ph_num',
    ];

    protected $table = "plugins";
}
