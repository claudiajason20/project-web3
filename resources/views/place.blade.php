@extends('master')

@section('title')
WEB3 | Place
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <a href="{{ url('detail') }}" class="card-image" style="background-image: url({{ URL::asset('images/project-1.jpg') }});"></a>
                <div class="card-text">
                    <h4><a href="{{ url('detail') }}">Amsterdam</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <a class="btn btn-primary" href="{{ url('detail') }}">Read more</a>
                </div> 
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <a href="{{ url('detail') }}" class="card-image" style="background-image: url({{ URL::asset('images/project-2.jpg') }});"></a>
                <div class="card-text">
                    <h4><a href="{{ url('detail') }}">Barcelona</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <a class="btn btn-primary" href="{{ url('detail') }}">Read more</a>
                </div> 
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <a href="{{ url('detail') }}" class="card-image" style="background-image: url({{ URL::asset('images/project-3.jpg') }});"></a>
                <div class="card-text">
                    <h4><a href="{{ url('detail') }}">Copenhagen</a></h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <a class="btn btn-primary" href="{{ url('detail') }}">Read more</a>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection