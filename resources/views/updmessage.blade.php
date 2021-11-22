@extends('layouts.app')
@section('content')
    <form action="{{ route('update-submit', $data->id) }}" method="post" class="">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" class="form-control" placeholder="Name" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" id="email" class="form-control" placeholder="Email" value="{{$data->email}}">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" type="text" id="message" class="form-control" placeholder="Message">{{$data->message}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>

        </div>
    </form>
@endsection
