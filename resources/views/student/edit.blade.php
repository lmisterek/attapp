@extends('layouts.app')

@section('title', '| Students')

@section('content')


    <div class = "row">
        <div class="col-md-12">
            <h1> Edit Student Information </h1>
        </div>


        <div class="table-responsive">
                    <hr>
        </div>
    </div>

    <div class = "row">

        <div class="col-md-12">
                    <table class="table table-hover table-striped table-condensed">
                        <thead>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Email Address</th>
                            <th>Actions</th>

                        </thead>
                        <tbody>


                                {!! Form::model($student, [ 'route' => ['students.update', $student->id], 'method' => 'PUT']) !!}

                                <tr><td>
                                {{ Form::text('student_last_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '20'))}}</td>

                                <td>{{ Form::text('student_first_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '20'))}}</td>
                                <td>{{ Form::text('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '50'))}}</td>
                                <td>
                                    {{ Form::submit('Save Changes', ['student' => 'btn btn-success btn-block'])}}



                                    {!! Form::close() !!}

                                    {!! Form::open(array('route' => array('students.destroy', $student->id), 'method' => 'DELETE')) !!}

                                    {!! Form::submit('Delete Student from Roster', ['student' => 'btn btn-danger']) !!}

                                    {!! Form::close()!!}


                                </td>
                                </tr>

                        </tbody>


                    </table>

        </div>
    </div>




@stop
