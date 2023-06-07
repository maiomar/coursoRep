<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rejistration;
use Carbon\carbon;

class RejistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rijestration=Rejistration::create([
            'student_id'=>1,
            'course_id'=>1,
            'accepted'=>false


        ]);


        $rijestration=Rejistration::create([
            'student_id'=>2,
            'course_id'=>2,
            'accepted'=>true
        ]);
        $rijestration=Rejistration::create([
            'student_id'=>2,
            'course_id'=>3,
            'accepted'=>true
        ]);

        $rijestration=Rejistration::create([
            'student_id'=>2,
            'course_id'=>4,
            'accepted'=>true
        ]);


        $rijestration=Rejistration::create([
            'student_id'=>3,
            'course_id'=>3,
            'accepted'=>true
        ]);

    }
}
