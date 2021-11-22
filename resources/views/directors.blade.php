@extends('layouts.app')
@section('content')
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>director name: {{$el->name}}</h3>
            <h3>film title: {{$el->film['title']}}</h3>
        </div>
    @endforeach
@endsection
