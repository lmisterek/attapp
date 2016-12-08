@extends('layouts.app')

@section('title', '| Edit Class')

@section('content')

<div class="row">

    {!! Form::model($course, [ 'route' => ['courses.update', $course->id], 'method' => 'PUT']) !!}

    <div class="col-md-8">


        <h1>{{ $course->instructor}} Class Created</h1>

                <div class = "row">
                {{ Form::label('instructor', 'Instructor Last Name:')}}
                {{ Form::text('instructor', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '20'))}}
                </div>

                <div class = "row">
                {{ Form::label('prefix', 'Class Prefix:')}}
                {{ Form::text('prefix', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '10'))}}
                </div>

                <div class = "row">
                {{ Form::label('course_code', 'Section Number:')}}
                {{ Form::text('course_code', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '10', 'data-parsley-type' => 'digits'))}}
                </div>

                <hr>

                <div class = "row">
                    {{ Form::label('semester', 'Semester:')}}
                    {{ Form::text('semester', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '15'))}}
                </div>
                <hr>

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



    </div>

    <div class="col-md-4">
        <div class="row">
            <div class="col-sm-6">
                <a href="{{ route('courses.show', $course->id)}}" class="btn btn-danger btn-block">Cancel</a>
            </div>
            <div class="col-sm-6">
                {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])}}
            </div>
        </div>
    </div>

    {!! Form::close() !!}


</div>



@stop
