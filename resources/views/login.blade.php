@extends('template')
@section('title', 'Login')
@section('content')

@if($errors->any())
<div class="alert alert-danger" role="alert">
  nik atau password salah
</div>
@endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputnik1" class="form-label">nik address</label>
            <input type="nik" class="form-control" name="nik">
            @error('nik')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
