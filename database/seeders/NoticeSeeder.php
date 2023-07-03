<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notices')->insert([
            'title' => 'Admission Going on for the session 2022-2023. For more details call: 6296186941',
            'slug' => 'Admission-Going-on-for-the-session-2022-2023-For-more-details-call-6296186941',
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notices')->insert([
            'title' => 'Eligibility: Candidate must have passed Higher Secondary (10+2) or equivalent examination in any wing preferable with science with minimum 40% marks',
            'slug' => 'Eligibility-Candidate-must-have-passed-Higher-Secondary-or-equivalent-examination-in-any-wing-preferable-with-science-with-minimum-marks',
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notices')->insert([
            'title' => 'GNM Course Admission Going on. Duration - 3years + internship of 6 months. Total intake of seats - 60 students.',
            'slug' => 'GNM-Course-Admission-Going-on-Duration-3years-internship-of-6-months-Total-intake-of-seats-60-students',
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
