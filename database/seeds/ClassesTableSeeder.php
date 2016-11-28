<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
        'prefix' => 'MAT 092',
        'course_code' => 12345,
        'year' => 2016,
        'semester' => 'Fall',
        'instructor' => 'Misterek',
        ]);

        DB::table('classes')->insert([
        'prefix' => 'MAT 120',
        'course_code' => 23456,
        'year' => 2016,
        'semester' => 'Spring',
        'instructor' => 'Misterek',
        ]);

        DB::table('classes')->insert([
        'prefix' => 'MAT 122',
        'course_code' => 34567,
        'year' => 2017,
        'semester' => 'Spring',
        'instructor' => 'Misterek',
        ]);


    }
}
