@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="lg--prof-pic">
        </div>
        <div class="lg--prof-info">
          <h3>{{Auth::user()}}</h3>
        </div>

    </div>

@endsection
