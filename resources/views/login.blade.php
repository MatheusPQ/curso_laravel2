@extends('layout')

@section('portal')

@include('includes.errors')

@if(session()->has('error'))
    <span class="alert alert-danger"> {{session('error')}} </span>
@endif

@include('includes.message_success')

    <h2>Página inicial do curso de laravel</h2>

    <form action="/login/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Logar</button>

    </form>
@endsection