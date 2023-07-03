<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_details')
        ->insert([
            'site_title' => 'Disha Nursing Institution',
            'site_desc' => 'Disha Nursing Institution.',
            'site_keys' => 'Disha, Nursing, Institution',
            'primary_color' => '#56205E',
            'secondary_color' => '#DEB436',
            'preloader_color' => '#DEB436',
            'preback_color' => '#56205E',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
