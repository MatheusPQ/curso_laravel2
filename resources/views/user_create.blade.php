@extends('layout')
@section('portal')

{{-- @if($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
    </ul>
</div>

@endif --}}

@include('includes.errors')
@include('includes.message_success')

<form action="/user/store" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="">Pass</label>
        <input type="text" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">cadastrar</button>
</form>

@endsection