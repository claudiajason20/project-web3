@extends('master')

@section('content')
<div class="jumbotron" style="background-image: url({{ URL::asset('images/project-1.jpg') }});">
    <h1>{{ config('app.name', 'TripsAndTips') }}</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4">
        <h3> Eindhoven </h3>
        <p> Hemelrijken 93 </p>
        <p> Nord-Braband </p>
        </div>
    </div>

</div>


@endsection