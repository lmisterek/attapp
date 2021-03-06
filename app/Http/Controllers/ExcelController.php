<?php

namespace Attapp\Http\Controllers;

use Request;

use Attapp\Http\Requests;

use DB;
use Carbon;
use Attapp\Student;
use Attapp\User;
use Session;
use Excel;


class ExcelController extends Controller
{
    public function getImport(){

        return view('excel.importRoster');

    }

    public function postImport(){


        Excel::load(Request::file('student'), function($reader) {

                    // reader methods


                $reader->each(function($row){
                        Student::firstOrCreate($row->toArray());
                });

            });

            $course = Session::get('id');

            //redirect to another page
            return redirect()->route('courses.index', $course);

    }




    public function getExport(){
        $section=Session::get('section');


        $student =  Student::where('course_code', $section)->orderBy('student_last_name')->get();


        Excel::create('Roster', function($excel) use($student){

        $excel->sheet('Sheet 1', function($sheet) use($student){
            $sheet->fromArray($student);
        });
    })->export('csv');
}


    public function deleteAll(){
        DB::table('students')->delete();

    }

}
