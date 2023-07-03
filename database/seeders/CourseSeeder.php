<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => 'General Nursing and Midwifery',
            'slug' => 'General-Nursing-and-Midwifery',
            'image' => 'course/gnm.jpg',
            'short' => 'It is a 3 years program designed to prepare students to work efficiently as members of the healthcare community. This programme encompasses subjects like Nursing Fundamentals, First Aid, Bio-Science, Behavioural Science, Nutrition, Child Health Nursing and much more. With its Internship Programme in the 3rd year, the programme also trains future health professionals to provide effective nursing care and assist doctors in surgical procedures, and adeptly handle patients during emergencies.',
            'desc' => 'It is a 3 years program designed to prepare students to work efficiently as members of the healthcare community. This programme encompasses subjects like Nursing Fundamentals, First Aid, Bio-Science, Behavioural Science, Nutrition, Child Health Nursing and much more. With its Internship Programme in the 3rd year, the programme also trains future health professionals to provide effective nursing care and assist doctors in surgical procedures, and adeptly handle patients during emergencies.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('courses')->insert([
            'title' => 'B.Sc Nursing',
            'slug' => 'BSc-Nursing',
            'image' => 'course/bsc.jpg',
            'short' => 'This four-year degree program in Nursing is an extensively laced out program within an academic framework specifically focused to prepare graduates who can assume responsibilities in the healthcare sector as professional and competent nurses and midwives in providing promotive, preventive, curative, and rehabilitative services. Subjects like Foundational Nursing, Surgical and Community Nursing, Mental Health Nursing, Midwifery, and Obstetrical Nursing form the foundation of this course.',
            'desc' => 'This four-year degree program in Nursing is an extensively laced out program within an academic framework specifically focused to prepare graduates who can assume responsibilities in the healthcare sector as professional and competent nurses and midwives in providing promotive, preventive, curative, and rehabilitative services. Subjects like Foundational Nursing, Surgical and Community Nursing, Mental Health Nursing, Midwifery, and Obstetrical Nursing form the foundation of this course.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
