<?php

use Illuminate\Database\Seeder;

class RostersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rosters')->insert([
        'section' => 12345,
        'student_last_name' => 'Petersen',
        'student_first_name' => 'Gabe',
        'prefix' => 'MAT092',
        'instructor' => 'Misterek',
        'student_email_address' => 'leeanna.misterek@gmail.com',
    ]);

    DB::table('rosters')->insert([
    'section' => 12345,
    'student_last_name' => 'Nichols',
    'student_first_name' => 'Charity',
    'prefix' => 'MAT092',
    'instructor' => 'Misterek',
    'student_email_address' => 'leeanna.misterek@gmail.com',
]);
    }
}
