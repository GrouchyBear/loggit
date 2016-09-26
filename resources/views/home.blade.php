@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="lg--prof-pic">
        </div>
        <div class="col m6">
            <div class="lg--prof-info">
            <h3>{{}}<a href="#">Edit Name</a> </h3>
                <ul>
                    <li>Course: {{}}</li>
                    <li>Attendance: {{}}</li>
                    <li>Assignments due: {{}}</li>
                </ul>
            </div>
        </div>

    </div>

@endsection
