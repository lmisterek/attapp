@extends('layouts.app')

@section('title', '| Classes')

@section('content')


    <h1></h1>

    <div class = "row">
        <div class="col-md-10">
            <h1>All Courses </h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('courses.create')}}" class="btn btn-primary btn-block btn-h1-spacing">Create a Course</a>
        </div>

        <div class="col-md-12">
                    <hr>
        </div>
    </div>

    <div class = "row">
        <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <th>Prefix</th>
                            <th>Section Number</th>
                            <th>Semester</th>
                            <th></th>
                        </thead>
                        <tbody>

                            @foreach($courses as $course)

                                <tr><th>{{ $course->prefix }}</th>

                                <td>{{ $course->course_code}}</td>
                                <td>{{ $course->semester}}</td>
                                <td><a href="{{ route('courses.show', $course->id )}}" class="btn btn-default">View</a>
                                    <a href="{{ route('courses.edit', $course->id)}}" class="btn btn-default">Edit</a>

                                    <!--  To do:  Take Attendance -->
                                    <a href="#" class="btn btn-default">Students</a>
                                    <!--  To do:  Take Attendance -->
                                    <a href="#" class="btn btn-default">Take Attendance</a>
                                </td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>
        </div>
    </div>





@stop
