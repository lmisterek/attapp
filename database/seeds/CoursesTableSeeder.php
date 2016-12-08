<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'instructor' => 'Misterek',
            'prefix' => 'MAT 092',
            'course_code' => 12345,
            'semester' => 'Fall 2016',
            'absentpoint' => 1,
            'tardypoint' => 0.5,
            'warning' => 3,
            'instructor_id' => 1,

        ]);

        DB::table('courses')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'instructor' => 'Jill',
            'prefix' => 'CS 15',
            'course_code' => 11111,
            'semester' => 'Fall 2016',
            'absentpoint' => 1,
            'tardypoint' => 0.5,
            'warning' => 3,
            'instructor_id' => 7,

        ]);

        DB::table('courses')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'instructor' => 'Jamal',
            'prefix' => 'CS 15',
            'course_code' => 99999,
            'semester' => 'Fall 2016',
            'absentpoint' => 1,
            'tardypoint' => 0.5,
            'warning' => 3,
            'instructor_id' => 8,

        ]);


    }
}
