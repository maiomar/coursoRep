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
            'user_id'=>1,
            'course_id'=>1,



        ]);


        $rijestration=Rejistration::create([
            'user_id'=>2,
            'course_id'=>2,

        ]);
        $rijestration=Rejistration::create([
            'user_id'=>2,
            'course_id'=>3,
        ]);

        $rijestration=Rejistration::create([
            'user_id'=>2,
            'course_id'=>4,
        ]);


        $rijestration=Rejistration::create([
            'user_id'=>3,
            'course_id'=>3,
        ]);

    }
}
