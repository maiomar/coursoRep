<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Carbon\carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Student::factory(100)->create();

       $stude=Student::create([

        'user_id'=>1,
        'gender'=>'أنثى',
        'Address'=>'Damascuse',
        'nationality'=>'balasteen',
        'social_situation'=>'goode',
        'educcational_attainment'=>'unvirsity tegnologe',
        'birth_date'=>Carbon::parse('2004-1-1'),
        'email'=>'sara@user1.com',
        'last_name'=>'Alkatteb',
        'name_stedent'=>'sara',
        'momile_phone'=>'0945739254',
       ]);

       $stude=Student::create([

        'user_id'=>2,
        'gender'=>'أنثى',
        'Address'=>'Damascuse',
        'nationality'=>'balasteen',
        'social_situation'=>'goode',
        'educcational_attainment'=>'unvirsity tegnologe',
        'birth_date'=>Carbon::parse('2004-1-1'),
        'last_name'=>'mousa',
        'name_stedent'=>'Ayat',
        'email'=>'Ayat@user1.com',
        'momile_phone'=>'0945739254',

       ]);

       $stude=Student::create([

        'user_id'=>3,
        'gender'=>'أنثى',
        'Address'=>'Damascuse',
        'nationality'=>'balasteen',
        'social_situation'=>'goode',
        'educcational_attainment'=>'unvirsity tegnologe',
        'birth_date'=>Carbon::parse('2004-1-1'),
        'last_name'=>'Alkatteb',
        'name_stedent'=>'sedra',
        'momile_phone'=>'0945739254',
        'email'=>'sedra@user1.com',
       ]);
    }
}
