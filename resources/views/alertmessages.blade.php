@extends('layouts.app')
@section('content')
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>name: {{$el->name}}</h3>
            <p>email: {{$el->email}}</p>
            <p><small>message: {{$el->message}}</small></p>
            <a href="{{ route('alertonemessages', $el->id) }}"><button class="btn btn-warning">More</button></a>
        </div>
    @endforeach
@endsection
