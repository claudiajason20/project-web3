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
            <h4>{{ $city->name }}</h4>
            <p>{{ $city->description }} </p>
            <a class="btn btn-primary" href="{{ url('city') }}">Back</a>
        </div>
    </div>
    <div class="places section">
        <h3>Places</h3>
        <div class="row">
            @foreach ($places as $place)
                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <a href="{{ url('place/'.$place->id) }}" class="card-image" style="background-image: url({{ URL::asset('images/project-'.$place->id.'.jpg') }});"></a>
                        <div class="card-text">
                            <h4><a href="{{ url('place/'.$place->id) }}">{{ $place->name }}</a></h4>
                            <p>{{ $place->description }}</p>
                            <a class="btn btn-primary" href="{{ url('place/'.$place->id) }}">Read more</a>
                        </div> 
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection