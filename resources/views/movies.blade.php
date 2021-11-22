@extends('layouts.app')
@section('content')
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>Movie name: {{$el->name}}</h3>
            @foreach($el->cinemas as $cinema)
                <h4>Cinema name: {{$cinema['name']}}</h4>
            @endforeach
        </div>
    @endforeach
@endsection
