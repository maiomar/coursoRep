<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CourseTeachers;

class CourseTeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseTeacher=CourseTeachers::create([
            'course_id'=>1,
            'teacher_id'=>1,

        ]);
        $courseTeacher=CourseTeachers::create([
            'course_id'=>2,
            'teacher_id'=>2,

        ]);

        $courseTeacher=CourseTeachers::create([
            'course_id'=>3,
            'teacher_id'=>3,

        ]);
    }
}
