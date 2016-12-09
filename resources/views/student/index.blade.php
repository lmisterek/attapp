@extends('layouts.app')

@section('title', '| Students')

@section('content')


    <div class = "row">
        <div class="col-md-12">
            <h1>Roster </h1>
        </div>

        <div class="col-md-12">
            <a href="{{ route('students.create')}}" class="btn btn-primary">Add a Student</a>
            <a href="{{URL::to('/getImport')}}" class="btn btn-success">Import CSV</a>
            <div class="btn-group">
                <button type="button" class="btn btn-info">Export Roster</button>
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu" id="export-menu">
                    <li id="export-to-excel" ><a href="{{URL::to('/getExport')}}">Export to CSV</a></li>
                    <li class="divider"></li>

                </ul>
            </div>
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
