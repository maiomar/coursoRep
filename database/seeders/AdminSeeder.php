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
            'name' => 'Admin',
            'email'=>'Admin@Admin.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role_id'=>1,
            'last_name'=>'Alkatteb',
            'momile_phone'=>'0945739254',
            'photo_profile'=>"D:\mypuctuers\Snapchat\IMG-20221225-WA0000.jpg",

        ]);
    }
}
