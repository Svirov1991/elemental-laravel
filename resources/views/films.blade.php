@extends('layouts.app')
@section('content')
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>film title: {{$el->title}}</h3>
            <h3>name director: {{$el->director['name']}}</h3>
        </div>
    @endforeach
@endsection
