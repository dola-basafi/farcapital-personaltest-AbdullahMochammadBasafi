@extends('template')
@section('title', 'Halaman Utama')




@section('content')

   
    @if (session()->get('idPengguna'))
        <h1 class="text-center display-1">Anda Telah Login</h1>
    @else
    <h1 class="text-center display-1">Selamat Datang di aplikasi pendaftaran donor darah</h1>
    <div class="text-center m-auto">

        <a href="{{ route('loginForm') }}" class="btn btn-primary">LOGIN</a>
        <a href="{{ route('register_form') }}" class="btn btn-success">REGISTER</a>
    </div>
    @endif







@endsection
