@extends('layouts.app')

@section('title', '| Take Attendance')

@section('content')

    <div class = "row">
        <div class="col-md-12">

            <h1>Section:  {{$section}}</h1>


    <div class = "row">
        <div class="col-md-12">
            {!! Form::open(['route' => 'records.store', 'data-parsley-validate' => '']) !!}

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
                                    <td>
                                        {{ Form::select('roster[]', ['present' => 'Present',
                                            'absent' => 'Absent', 'tardy' => 'Tardy']), 'present'}}
                                    </td>
                                </td>

                                </tr>

                            @endforeach


                        </tbody>

                    </table>

                    {{ Form::submit('Submit Attendance', ['roster[]' => 'btn btn-success btn-block'])}}



                    {!! Form::close() !!}
        </div>
    </div>


@stop
