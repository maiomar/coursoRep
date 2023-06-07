<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\courseSyllabus;

class CourseSyllabusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coursesylabus=courseSyllabus::create([
               'cours_id'=>1,
               'course_subject'=>'دورة طبية لتعليم اساسيات الطب والاسعافات الاولية',
               'course_content'=>'hhhhhhhhhhhhhh'

        ]);

        $coursesylabus=courseSyllabus::create([
            'cours_id'=>2,
            'course_subject'=>'دورة طبية لتعليم اساسيات الطب والاسعافات الاولية',
            'course_content'=>'jugfvhhhhhhhhhhhhhhhh'

     ]);

     $coursesylabus=courseSyllabus::create([
        'cours_id'=>3,
        'course_subject'=>'دورة طبية لتعليم اساسيات الطب والاسعافات الاولية',
        'course_content'=>'ggggggggggggggggggg'

 ]);
    }
}
