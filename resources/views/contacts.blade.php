@extends('layouts.app')

@section('content')
    <h1>Page contacts</h1>

    <form action="{{ route('form-submit') }}" method="post" class="">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" id="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" type="text" id="message" class="form-control" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
@endsection
@section('left')
    @parent
@endsection
