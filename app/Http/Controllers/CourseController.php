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
        // To Do:  Change this so it just pulls up one instructor
        $courses =  Course::all();

        // return a view and pass in the above variable
        return view('course.index')->withCourses($courses);
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
            'semester' => 'max:15',
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
        $course = new Course;
        $course = Course::find($id);


        return view('course.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the data base and save
        $course = Course::find($id);

        // return the view and pass in the variable we created
        return view('course.edit')->withCourse($course);
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



        // Validate the data
        $this->validate($request, array(
            'prefix' => 'required|max:10',
            'course_code' => 'required|max:10',
            'semester' => 'max:15',
            'absentpoint' => 'required|digits_between:0,3',
            'tardypoint' => 'required|digits_between:0,3',
            'warning' => 'required|digits_between:0,3',
            ));



        // Save the data to the database
        $course = Course::find($id);


        $course->prefix = $request->input('prefix');
        $course->course_code = $request->input('course_code');
        $course->semester = $request->input('semester');
        $course->absentpoint = $request->input('absentpoint');
        $course->tardypoint = $request->input('tardypoint');
        $course->warning = $request->input('warning');

        $course->save();


        // Set flash data with success message
        Session::flash('success', "This class was successfully saved.");


        // Redirect with flash data to the courses.show
        return redirect()->route('courses.show', $course->id);
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
        $course = Course::find($id);

        $course->delete();

        // Set flash data with success message
        Session::flash('success', "This class was successfully deleted.");

        return redirect()->route('courses.index');
    }
}
