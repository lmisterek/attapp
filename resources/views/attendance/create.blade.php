@extends('layouts.app')

@section('title', '| Take Attendance')

@section('content')


    <div class = "row">
        <div class="col-md-12">
            <h1>Section:  </h1>
        </div>


        <div class="table-responsive">
                    <hr>
        </div>
    </div>

    <div class = "row">
        <div class="col-md-12">
                    <table class="table table-hover table-striped table-condensed">
                    <caption>Student Roster</caption>
                        <thead>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Email Address</th>

                        </thead>
                        <tbody>

                            @foreach($students as $student)

                                <tr><th>{{ $student->student_last_name }}</th>

                                <td>{{ $student->student_first_name}}</td>
                                <td>{{ $student->email}}</td>

                                <td>

                                    <!--
                                    <a href="{{ route('students.show', $student->id )}}" class="btn btn-default">View</a>
                                    <a href="{{ route('students.edit', $student->id)}}" class="btn btn-default">Edit</a>
                                    -->
                                    <a href="{{ route('students.edit', $student->id)}}" class="btn btn-default">Edit Student</a>

                                </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
        </div>
    </div>


@stop
