<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $user = User:: create ([

            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role_id'=>2,
            'name' => 'sara',
            'last_name'=>'Alkatteb',
            'photo_profile'=>"D:\mypuctuers\Snapchat\IMG-20221225-WA0000.jpg",
            'email'=>'sara@user1.com',
            'momile_phone'=>'0945739254',

        ]);


        $user = User:: create ([

            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role_id'=>2,
            'name' => 'Ayat',
            'last_name'=>'Mousa',
            'momile_phone'=>'0947739254',
            'photo_profile'=>"D:\mypuctuers\Snapchat\IMG-20221225-WA0000.jpg",
            'email'=>'Ayat@user2.com',
        ]);

        $user = User:: create ([

            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role_id'=>2,
            'name' => 'Amjad',
            'last_name'=>'kassem',
            'momile_phone'=>'0945739254',
            'photo_profile'=>"D:\mypuctuers\Snapchat\IMG-20221225-WA0000.jpg",
            'email'=>'Amjad@user3.com',
        ]);
    }
}
