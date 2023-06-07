<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            RolesSeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            InstituteSeeder::class,
            TeacherSeeder::class,
            CourseSeeder::class,
            CourseTeachersSeeder::class,
            CourseSyllabusSeeder::class,
            StudentSeeder::class,
            RejistrationSeeder::class,
            SuggestionsSeeder::class,
            PaymentSeeder::class,


      ]);
    }
}
