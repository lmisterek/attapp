<?php

namespace Attapp\Http\Controllers;

use Illuminate\Http\Request;

use Attapp\Http\Requests;

use DB;
use Carbon;
use Attapp\Course;
use Session;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(

            'instructor' => 'required|max:20',
            'prefix' => 'required|max:10',
            'course_code' => 'required|max:10',
            'semester' => 'max:8',
            'students' => 'required',
            'absentpoint' => 'required|digits_between:0,3',
            'tardypoint' => 'required|digits_between:0,3',
            'warning' => 'required|digits_between:0,3',
            ));



        // store in the database
        $course = new Course;

        $course->instructor = $request->instructor;
        $course->prefix = $request->prefix;
        $course->course_code = $request->course_code;
        $course->semester = $request->semester;
        $course->students = $request->students;
        $course->absentpoint = $request->absentpoint;
        $course->tardypoint = $request->tardypoint;
        $course->warning = $request->warning;

        $course->save();

        Session::flash('success', 'The class was created!');
        // redirect to another page
        return redirect()->route('courses.show', $course->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view  ('course.show');
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
