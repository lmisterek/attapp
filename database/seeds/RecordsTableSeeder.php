<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
        'section' => 12345,
        'student_last_name' => 'Petersen',
        'student_first_name' => 'Gabe',
        'date_of_absence' => \Carbon\Carbon::createFromDate(2016,11,22)->toDateTimeString(),
        'date_of_tardy' => \Carbon\Carbon::createFromDate(2016,11,22)->toDateTimeString(),
        'points' => 1,
    ]);

        DB::table('records')->insert([
        'section' => 12345,
        'student_last_name' => 'Nichols',
        'student_first_name' => 'Charity',
        'date_of_absence' => \Carbon\Carbon::createFromDate(2016,11,22)->toDateTimeString(),
        'date_of_tardy' => \Carbon\Carbon::createFromDate(2016,11,22)->toDateTimeString(),
        'points' => 1,
    ]);
    }
}
