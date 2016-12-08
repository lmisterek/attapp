@extends('layouts.app')

@section('title', '| Student Roster')

@section('content')

    <form action="/postImport" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value={{csrf_token()}}>
        <input type="file" name="student">
        <input type="submit" value="Import"</input>
    </form>

@stop
