@extends('template')
@section('title', 'Halaman Utama')

@if($errors->any())
<div id="error-box">
    {{$message}}
</div>
@endif

@section('content')
    <a href="{{route('loginForm')}}" class="btn btn-primary">LOGIN</a>
    <a href="{{route('register_form')}}" class="btn btn-success">REGISTER</a>

    <a href="{{route('logout')}}" class="btn btn-success">LOGOUT</a>
@endsection
