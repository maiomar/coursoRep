<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = User:: create ([
            'first_name' => 'Admin',
            'email'=>'Admin@Admin.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role_id'=>1,
            'last_name'=>'Alkatteb',
            'mobile'=>'0945739254',
            'photo_profile'=>"D:\mypuctuers\Snapchat\IMG-20221225-WA0000.jpg",
            'birth_date'=>Carbon::parse('2023-12-1'),
            'gender'=>'انثى',
            'Address'=>'دمشق',
            'nationality'=>'سوري',
            'social_situation'=>'لااعمل',
            'educcational_attainment'=>'جامعة ',
        ]);
    }
}
