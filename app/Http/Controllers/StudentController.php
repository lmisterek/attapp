<?php

namespace Attapp\Http\Controllers;

use Illuminate\Http\Request;

use Attapp\Http\Requests;

use DB;
use Carbon;
use Attapp\Student;
use Attapp\User;
use Session;
use Excel;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // To Do:  Change this so it just pulls up just the instructor's students
        $students =  DB::table('students')->orderBy('student_last_name')->get();

        // return a view and pass in the above variable
        return view('student.index')->withStudents($students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
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

            'student_last_name' => 'required|max:20',
            'student_first_name' => 'required|max:20',
            'email' => 'max:20',
            ));





        // store in the database
        $student = new Student;

        $student->student_last_name = $request->student_last_name;
        $student->student_first_name = $request->student_first_name;
        $student->email = $request->email;



        $student->save();

        Session::flash('success', 'The student was added to the roster!');
        // redirect to another page
        return redirect()->route('students.index', $student->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $student = Student::find($id);

        // return the view and pass in the variable we created
        return view('student.edit')->withStudent($student);
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
            'student_last_name' => 'required|max:20',
            'student_first_name' => 'required|max:20',
            'email' => 'required|max:50',
            ));



        // Save the data to the database
        $student = Student::find($id);


        $student->student_last_name = $request->input('student_last_name');
        $student->student_first_name = $request->input('student_first_name');
        $student->email = $request->input('email');


        $student->save();


        // Set flash data with success message
        Session::flash('success', "This student was successfully saved.");


        // Redirect with flash data to the students.show
        return redirect()->route('students.index', $student->id);
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
        $student = Student::find($id);

        $student->delete();

        // Set flash data with success message
        Session::flash('success', "This student was successfully deleted.");

        return redirect()->route('students.index');
    }
}
