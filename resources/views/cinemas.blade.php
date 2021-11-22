@extends('layouts.app')
@section('content')
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>Cinema name: {{$el->name}}</h3>
            @foreach($el->movies as $movie)
                <h4>Movies: {{$movie['name']}}</h4>
            @endforeach
        </div>
    @endforeach
@endsection
