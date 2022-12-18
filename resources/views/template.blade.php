<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="container">
        <div class="text-end">
            @if (session()->get('idPengguna'))
                @if (session()->get('role'))
                    <a href="{{ route('dashboard') }}" class="btn btn-warning">DASHBOARD</a>
                @endif
                <a href="{{ route('logout') }}" class="btn btn-success">LOGOUT</a>
            @endif
        </div>
        @error('msg')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror

        @yield('content')
    </div>
</body>

</html>
