@extends('layouts.app')

@section('content')
Choose a section below
<form action="attendance.php" method="post">
    <table class="form-group" cellspacing='0' cellpadding='0' border=''>
        <tr>
        <th>Selector</th>
        <th>Prefix</th>
        <th>Section</th>
        <th>Semester</th>
        <th>Year</th>
        </tr>

    </table>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Take Attendance</button>
    </div>
</form>


@endsection
