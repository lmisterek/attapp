<?php

use Illuminate\Database\Seeder;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('students')->insert([
            'student_last_name' => "Peterson",
            'student_first_name' => "Michael",
            'email' => 'mp@gmail.com',
            'course_code' => '11111',
        ]);


        DB::table('students')->insert([
            'student_last_name' => "Misterek",
            'student_first_name' => "Ashlynn",
            'email' => 'Ashlynn.Misterek@gmail.com',
            'course_code' => '11111',
        ]);


        DB::table('students')->insert([
            'student_last_name' => "Misterek",
            'student_first_name' => "LeeAnna",
            'email' => 'LeeAnna.Misterek@gmail.com',
            'course_code' => '12345',

        ]);


        DB::table('students')->insert([
            'student_last_name' => "Caldwell",
            'student_first_name' => "Jennifer",
            'email' => 'Jennifer.Caldwell@gmail.com',
            'course_code' => '99999',
        ]);

        DB::table('students')->insert([
            'student_last_name' => "Rally",
            'student_first_name' => "Michelle",
            'email' => 'mr@gmail.com',
            'course_code' => '12345',
        ]);

        DB::table('students')->insert([
            'student_last_name' => "Harvard",
            'student_first_name' => "John",
            'email' => 'jh@gmail.com',
            'course_code' => '12345',
        ]);
    }
    }
}
