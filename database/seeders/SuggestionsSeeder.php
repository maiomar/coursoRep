<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Suggestions;
use Carbon\carbon;

class SuggestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suggeste=Suggestions::create([
              'user_id'=>1,
              'suggested_course'=>'رياضيات',
            ]);

        $suggeste=Suggestions::create([
                'user_id'=>2,
                'suggested_course'=>'علوم',
            ]);


        $suggeste=Suggestions::create([
                'user_id'=>3,
                'suggested_course'=>'رسم',
            ]);



    }
}
