<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;
use Carbon\carbon;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Roles :: create ([
            'role_name' => 'Admin',
        ]);

        $role = Roles :: create ([
            'role_name' => 'user',
        ]);
    }
}
