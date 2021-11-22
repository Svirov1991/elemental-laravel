@extends('layouts.app')
@section('content')
        <div class="alert alert-info">
            <h3>name: {{$data->name}}</h3>
            <p>email: {{$data->email}}</p>
            <p><small>message: {{$data->message}}</small></p>
            <a href="{{ route('update-message', $data->id) }}"><button class="btn btn-primary">Update</button></a>
            <a href="{{route('delete-message', $data->id)}}"><button type="button" class="btn btn-success">Delete</button></a>
        </div>
@endsection
