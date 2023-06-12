<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Day;
use Carbon\carbon;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $day=Day::create([
            'day_name'=>'الاحد',
        ]);
        $day=Day::create([
            'day_name'=>'الاثنين',
        ]);

        $day=Day::create([
            'day_name'=>'الثلاثاء',
        ]);

        $day=Day::create([
            'day_name'=>'الاربعاء',

        ]);

        $day=Day::create([
            'day_name'=>'الخميس',

        ]);

        $day=Day::create([
            'day_name'=>'الجمعة',

        ]);

        $day=Day::create([
            'day_name'=>'السيت',
        ]);
    }
}
