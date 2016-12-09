
@extends('layouts.app')

@section('title', '| Add a Student')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

<!-- Teachers can create new classes using this form.  They will input a class prefix, section number,
course code, year, and list of students  -->

    <div class="container">
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


                                    {!! Form::open(['route' => 'students.store', 'data-parsley-validate' => '']) !!}

                                    <tr><td>
                                    {{ Form::text('student_last_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '20'))}}</td>

                                    <td>{{ Form::text('student_first_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '20'))}}</td>
                                    <td>{{ Form::text('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '50'))}}</td>
                                    <td>
                                        {{ Form::submit('Save Changes', ['student' => 'btn btn-success btn-block'])}}



                                        {!! Form::close() !!}




                                    </td>
                                    </tr>

                            </tbody>


                        </table>

            </div>
        </div>



    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}

@endsection
