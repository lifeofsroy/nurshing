<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AffiliationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('affiliations')->insert([
            'doc' => 'affiliation/sample.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
