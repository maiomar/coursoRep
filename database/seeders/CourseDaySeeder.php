<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CourseDay;
use Carbon\carbon;

class CourseDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseday=CourseDay::create([
            'cours_id'=>2,
            'day_id'=>2,
            'from_time'=>Carbon::parse('06:00'),
            'to_time'=>Carbon::parse('08:00')
        ]);

    }
}
