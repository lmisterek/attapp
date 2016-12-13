@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="row">
        <div class="jumbotron">
            <div class="jumbotron">
                <h1>Welcome!</h1>
                <p>I am your your Attendance Assistant!  I want to make your life easier.</p>

                @if (Auth::guest())
                    <p><a class="btn btn-primary btn-lg" href= "{{ url('/login') }}" role="button">Get started</a></p>
                @else
                    <p><a class="btn btn-primary btn-lg" href= "{{ url('/courses/create') }}" role="button">Get started</a></p>
                @endif
            </div>
        </div>
    </div><!-- end of header .row -->

    <div class="row">
        <div class="col-md-8">
            <div class = "message">
            Are you tired of keeping detailed attendance records?  Would you like to have an
            assistant who can take attendance and message students with their attendance history
            so that students can be imformed about their attendance?
            </div>
        </div>
    </div>

    <hr>



@endsection
