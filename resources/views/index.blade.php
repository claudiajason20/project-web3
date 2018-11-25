@extends('master')

@section('title')
WEB3 | Index
@endsection

@section('content')
<div class="container">
    <h2>Welcome to BestTravel</h2>
    <a class="btn btn-primary" href="{{ url('place') }}">See places</a>
</div>
@endsection