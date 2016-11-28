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
        // Seed Classes Table
        $this->call(ClassesTableSeeder::class);

        // Seed Records Table
        $this->call(RecordsTableSeeder::class);

        // Seed Users Table
        $this->call(UsersTableSeeder::class);
    }
}
