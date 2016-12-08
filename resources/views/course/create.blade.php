
@extends('layouts.app')

@section('title', '| Create New Class')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

<!-- Teachers can create new classes using this form.  They will input a class prefix, section number,
course code, year, and list of students  -->

    <div class="container">
        <div class = "row">
            <div class ="col-md-8 col-md-offset-2">
                <h1>Create New Class </h1>
                <hr>
                <div class="form-group">
                    {!! Form::open(['route' => 'courses.store', 'data-parsley-validate' => '']) !!}

                    <div class = "row">
                    {{ Form::label('instructor', 'Instructor Last Name:')}}
                    {{ Form::text('instructor', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '20'))}}
                    </div>
                    <div class = "row">
                    {{ Form::label('prefix', 'Class Prefix:')}}
                    {{ Form::text('prefix', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '10'))}}
                    <br>

                    {{ Form::label('course_code', 'Section Number:')}}
                    {{ Form::text('course_code', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '10', 'data-parsley-type' => 'digits'))}}
                    <br>

                    {{ Form::label('semester', 'Semester:')}}
                    {{ Form::text('semester', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '15'))}}
                    <hr>
                    </div>

                    Set attendance points.  Example:  Tardy = 0.5, Absent = 1.0
                    <br>
                    Set warning level.  After this number of accumulated attendance points, students will receive an email message.
                    <br>
                    <div class="col-xs-4">
                    {{ Form::label('absentpoint', 'Absent Points:')}}
                    {{ Form::text('absentpoint', null, array('class' => 'form-control', 'required' => ''))}}
                    </div>
                    <div class="col-xs-4">
                        {{ Form::label('tardypoint', 'Tardy Points')}}
                        {{ Form::text('tardypoint', null, array('class' => 'form-control', 'required' => ''))}}
                    </div>
                    <div class="col-xs-4">
                    {{ Form::label('warning', 'Warning Points')}}
                    {{ Form::text('warning', null, array('class' => 'form-control', 'required' => ''))}}
                    </div>
                    <hr>
                    <div class="col-xs-12">
                        <hr>
                    {{ Form::submit('Create Class', ['class' => 'btn btn-success btn-block'])}}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}

@endsection
