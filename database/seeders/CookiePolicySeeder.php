<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CookiePolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cookie_policies')->insert([
            'title' => 'Cookie Policy',

            'desc' => 'Institution established in 2019, is the one & only multispecialty hospital in the district of Purba Bardhhaman with super specialty wings in Cardiology & Cardio Thorasic Surgery (Heart * Surgery). It is the first A Graded hospital of the District under the West Bengal Swasthya Sathi Scheme. We have started the journey with very well-experienced and accomplished team of Doctors, Nurse and other Paramedical as well as other administrative staffs and achieved the No 1 Position in the District within a short span of 2 years. This 101 bedded Hospital has 4 Operation Theatres. Cath Lab, CTVS-ITU, ICU, ICCU, Dialysis, Emergency Department, Pathology services, round the clock ambulance, Pharmacy and Other diagnostic services. There are around 12 Departments under which treatment is available like Cardiology, Pulmonology, Cardiac Surgery, ENT, General Surgery, Gynecology, General Medicine, Nephrology, Neurology, Orthopedic, Pediatrics & many more. So to create leaders in the field of Health Care we took the initiative to establish a Nursing Institute by the name of Bardhaman Institute of Nursing.',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
