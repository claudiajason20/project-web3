@extends('master')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($cities as $city)
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <a href="{{ url('city/'.$city->id) }}" class="card-image" style="background-image: url({{ URL::asset('images/project-'.$city->id.'.jpg') }});"></a>
                    <div class="card-text">
                        <h4><a href="{{ url('city/'.$city->id) }}">{{ $city->name }}</a></h4>
                        <p>{{ $city->description }}</p>
                        <a class="btn btn-primary" href="{{ url('city/'.$city->id) }}">Read more</a>
                    </div> 
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection