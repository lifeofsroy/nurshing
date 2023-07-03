<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EligibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eligibilities')->insert([
            'title' => 'Eligibility',
            'desc' => '<p><strong>Candidate must have passed Higher Secondary (10+2) or equivalent examination in any wing preferable with science with minimum 40% marks. Age should not be less than 18 years and not more than 35 years. Selection will be made through the admission test conducted by the West Bengal Joint Entrance Examination Board in the month of August 2022. The seats will be allotted accordingly as per the norms in the counselling process of the board.</strong></p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
