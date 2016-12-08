@extends('layouts.app')

@section('title', '| View Class')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $course->instructor}} Class Created</h1>
                <dl class="dl-horizontal">
                    <dt>Prefix</dt>
                    <dd>{{ $course->prefix }} </dd>

                    <dt>Section Number</dt>
                    <dd>{{ $course->course_code}} </dd>

                    <dt>Semester</dt>
                    <dd>{{ $course->semester}}</dd>

                    <!--  To do:  Make this look nice
                    <dt>Students</dt>
                    <dd>{{ $course->students}} </dd>
                    -->

                    <dt>Absent Points</dt>
                    <dd>{{ $course->absentpoint}} </dd>

                    <dt>Tardy Points</dt>
                    <dd>{{ $course->tardypoint}} </dd>

                    <dt>Warning</dt>
                    <dd>{{ $course->warning}} </dd>
                </dl>

        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{ route('courses.edit', $course->id)}}" class="btn btn-primary btn-block">Edit</a>
                </div>
                <div class="col-sm-6">
                    {!! Form::open(array('route' => array('courses.destroy', $course->id), 'method' => 'DELETE')) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                    {!! Form::close()!!}

                </div>
            </div>
        </div>


    </div>

@endsection
