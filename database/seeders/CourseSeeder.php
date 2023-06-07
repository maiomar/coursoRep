<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\course;
use Carbon\carbon;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course=course::create([
            'course_name'=>'رياضيات',
            'institute_id'=>1,
            'image_path'=>'D:\mypuctuers\Snapchat',
            'course_startdate'=>Carbon::parse('2023-10-1'),
            'course_enddate'=>Carbon::parse('2023-12-1'),
            'number_hourse'=>40,
            'course_type'=>'مجاني',
            'course_classification'=>'رياضيات والفيزياء',
            'rejistration_startdate'=>Carbon::parse('2023-8-1'),
            'rejistration_enddate'=>Carbon::parse('2023-8-15'),

        ]);



        $course=course::create([
            'course_name'=>'puthon',
            'institute_id'=>2,
            'cost1'=>12000,
            'cost2'=>10000,
            'image_path'=>'D:\mypuctuers\Snapchat',
            'course_startdate'=>Carbon::parse('2023-6-15'),
            'course_enddate'=>Carbon::parse('2023-8-15'),
            'number_hourse'=>40,
            'course_type'=>'حسم',
            'course_classification'=>'تكنولوجيا المعلومات',
            'rejistration_startdate'=>Carbon::parse('2023-5-1'),
            'rejistration_enddate'=>Carbon::parse('2023-5-15'),

        ]);

        $course=course::create([
            'course_name'=>'cisco',
            'institute_id'=>2,
            'cost1'=>100000,
            'cost2'=>9000,
            'image_path'=>'D:\mypuctuers\Snapchat',
            'course_startdate'=>Carbon::parse('2023-5-1'),
            'course_enddate'=>Carbon::parse('2023-8-1'),
            'number_hourse'=>40,
            'course_type'=>'حسم',
            'course_classification'=>'تكنولوجيا المعلومات',
            'rejistration_startdate'=>Carbon::parse('2023-4-1'),
            'rejistration_enddate'=>Carbon::parse('2023-4-15'),


        ]);


        $course=course::create([
            'course_name'=>'اسعافات اولية',
            'institute_id'=>4,
            'image_path'=>'D:\mypuctuers\Snapchat',
            'course_startdate'=>Carbon::parse('2023-7-1'),
            'course_enddate'=>Carbon::parse('2023-9-1'),
            'number_hourse'=>40,
            'course_type'=>'مجاني',
            'course_classification'=>'طبية',
            'rejistration_startdate'=>Carbon::parse('2023-6-1'),
            'rejistration_enddate'=>Carbon::parse('2023-6-15'),

        ]);

        $course=course::create([
            'course_name'=>'محاسبة',
            'institute_id'=>2,
            'cost1'=>100000,
            'image_path'=>'D:\mypuctuers\Snapchat',
            'course_startdate'=>Carbon::parse('2023-6-1'),
            'course_enddate'=>Carbon::parse('2023-8-1'),
            'number_hourse'=>40,
            'course_type'=>'مأجور',
            'course_classification'=>'مصارف ومحاسبة',
            'rejistration_startdate'=>Carbon::parse('2023-5-1'),
            'rejistration_enddate'=>Carbon::parse('2023-5-15'),

        ]);

       

        $course=course::create([
            'course_name'=>'دعم نفسي',
            'institute_id'=>6,
            'cost1'=>100000,
            'image_path'=>'D:\mypuctuers\Snapchat',
            'course_startdate'=>Carbon::parse('2023-10-1'),
            'course_enddate'=>Carbon::parse('2023-12-1'),
            'number_hourse'=>40,
            'course_type'=>'مأجور',
            'course_classification'=>'تنمية بشرية ',
            'rejistration_startdate'=>Carbon::parse('2023-9-1'),
            'rejistration_enddate'=>Carbon::parse('2023-9-15'),

        ]);
    }
}
