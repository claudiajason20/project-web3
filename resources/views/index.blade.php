@extends('master')

@section('title')
WEB3 | Index
@endsection

@section('content')
<div class="flex-center position-ref full-height">
    Hello World!
    <a href="{{ url('welcome') }}">Welcome!</a>
    This is my first Laravel.
</div>
@endsection