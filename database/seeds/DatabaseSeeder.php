<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed Courses Table
        $this->call(CoursesTableSeeder::class);

        // Seed Records Table
        $this->call(StudentsTableSeeder::class);

        // Seed Users Table
        $this->call(UsersTableSeeder::class);
    }
}
