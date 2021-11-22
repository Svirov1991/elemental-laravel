@extends('layouts.app')
@section('content')
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>Author name: {{$el->name}}</h3>
            @foreach($el->books as $book)
                <h4>Book: {{$book['title']}}</h4>
            @endforeach
        </div>
    @endforeach
@endsection
