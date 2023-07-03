<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_title',
        'site_desc',
        'site_keys',
        'primary_color',
        'secondary_color',
        'preloader_color',
        'preback_color',
    ];

    protected $table = "site_details";
}
