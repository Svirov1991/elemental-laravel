@extends('layouts.app')
@section('content')
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>Book title: {{$el->title}}</h3>
            <h4>Book author: {{$el->author['name']}}</h4>
        </div>
    @endforeach
@endsection
