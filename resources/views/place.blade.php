@extends('master')

@section('title')
WEB3 | Place
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <a href="{{ url('place/1') }}" class="card-image" style="background-image: url({{ URL::asset('images/project-1.jpg') }});"></a>
                <div class="card-text">
                    <h4><a href="{{ url('place/1') }}">Amsterdam</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <a class="btn btn-primary" href="{{ url('place/1') }}">Read more</a>
                </div> 
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <a href="{{ url('place/2') }}" class="card-image" style="background-image: url({{ URL::asset('images/project-2.jpg') }});"></a>
                <div class="card-text">
                    <h4><a href="{{ url('place/2') }}">Barcelona</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <a class="btn btn-primary" href="{{ url('place/2') }}">Read more</a>
                </div> 
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <a href="{{ url('place/3') }}" class="card-image" style="background-image: url({{ URL::asset('images/project-3.jpg') }});"></a>
                <div class="card-text">
                    <h4><a href="{{ url('place/3') }}">Copenhagen</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <a class="btn btn-primary" href="{{ url('place/3') }}">Read more</a>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection