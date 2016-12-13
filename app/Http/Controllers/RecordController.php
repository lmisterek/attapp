<?php

namespace Attapp\Http\Controllers;

use Illuminate\Http\Request;

use Attapp\Http\Requests;
use Session;
use DB;
use Attapp\Record;
use Attapp\Student;
use Attapp\Http\Traits\SectionsTrait;


class RecordController extends Controller
{
    use SectionsTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id  THIS IS THE COURSE ID
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Create an array of the student attendance history
        $marks = $request->roster;

        // Get the course and student names
        $section = Session::get('section');
        $course = Session::get('id');

        $students = DB::table('students')->where('course_code', $section)->orderBy('student_last_name')->get();

        // store in the database
        $record = new Record;

        $i = 0;

        foreach($marks as $mark) {

            $record = new Record;

                $record->course_code = $section;
                $record->student_last_name = $students[$i]->student_last_name;
                $record->student_first_name = $students[$i]->student_first_name;

                if($mark == 'absent')
                {
                    $record->points = 1.0;
                }
                else if($mark == 'tardy')
                {
                    $record->points = 0.5;
                }

                $record->save();

                $i++;

            };




            Session::flash('success', 'The attendance was stored!');

            //redirect to another page
            return redirect()->route('courses.index', $course);

    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $section = $this->getSectionNumber($id);

        Session::put('section', $section);
        Session::put('id', $id);

        $students = DB::table('students')->where('course_code', $section)->orderBy('student_last_name')->get();


        // return a view and pass in the above variable
        return view('record.create', ['students' => $students, 'section' => $section]);
    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
