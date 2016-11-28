
@extends('layouts.app')
@section('content')

<!-- Teachers can create new classes using this form.  They will input a class prefix, section number,
course code, year, and list of students  -->

    <div class="container">
        <div class = "row">
            <div class ="col-md-8">
                <h1>Create New Class </h1>
                <hr>
                <div class="form-group">
                    {!! Form::open(['route' => 'classes.store']) !!}
                    <div class = "row">
                    {{ Form::label('prefix', 'Class Prefix:')}}
                    {{ Form::text('prefix', null, array('class' => 'form-control'))}}
                    <br>

                    {{ Form::label('section', 'Section Number:')}}
                    {{ Form::text('section', null, array('class' => 'form-control'))}}
                    <br>
                    </div>
                    <div class ="col-md-2">
                    {{ Form::label('semester', 'Fall')}}
                    {{Form::radio('semester', 'fall')}}
                    </div>
                    <div class ="col-md-3">
                    {{ Form::label('semester', 'Spring')}}
                    {{Form::radio('semester', 'spring')}}
                    </div>
                    <div class ="col-md-3">
                    {{ Form::label('semester', 'Winter')}}
                    {{Form::radio('semester', 'winter')}}
                    </div>
                    <div class ="col-md-3">
                    {{ Form::label('semester', 'Summer')}}
                    {{Form::radio('semester', 'summer')}}
                    </div>

                    <hr>
                    <h4>Year</h4>
                    <select name="year">
                        <?PHP
                        $year = date("Y"); for ($i = 0; $i <= 2; $i++) {echo "<option>$year</option>"; $year++;}
                        ?>
                    </select>
                    <br>
                    <br>
                    <p>
                    List students last name, first name, email@address.com followed by a newline.
                    {{Form::textarea('username')}}
                    </p>
                    Set attendance points.  Example:  Tardy = 0.5, Absent = 1.0
                    <br>
                    Set warning level.  After this number of accumulated attendance points, students will receive an email message.
                    <br>
                    <div class="col-xs-4">
                    {{ Form::label('absentpoint', 'Absence Points:')}}
                    {{ Form::text('absentpoint', 1, array('class' => 'form-control'))}}
                    </div>
                    <div class="col-xs-4">
                    {{ Form::label('tardypoint', 'Tardy Points')}}
                    {{ Form::text('tardypoint', 0.5, array('class' => 'form-control'))}}
                    </div>
                    <div class="col-xs-4">
                    {{ Form::label('warning', 'Warning Points')}}
                    {{ Form::text('warning', 3, array('class' => 'form-control'))}}
                    </div>
                    <hr>
                    <hr>
                    <input class="button-primary" type="submit" value="Create Class">

                    {!! Form::close() !!}
                </div>
            </div>
    </div>

@endsection
