@extends('master')

@section('title')
WEB3 | Detail
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="img-fluid" src="{{ URL::asset('images/project-1.jpg') }}">
        </div>
        <div class="col-sm-6 text-justify">
            <h4>{{ $id }} City</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a class="btn btn-primary" href="{{ url('place') }}">Back</a>
        </div>
    </div>
</div>
@endsection