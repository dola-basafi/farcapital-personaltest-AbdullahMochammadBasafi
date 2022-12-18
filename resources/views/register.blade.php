@extends('template')
@section('title', 'Register')
@section('content')

    <form method="POST" action="{{ route('register') }}">
        @csrf
        {{-- {{ old('nik', '') }} --}}
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="nik" class="form-control" name="nik" id="nik">
            @error('nik')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
            @error('password')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama">
            @error('nama')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
          <select class="form-select" name="jenisKelamin">
            <option selected value="">Pilih</option>
            <option value="0">Wanita</option>
            <option value="1">Pria</option>            
          </select>
          @error('jenisKelamin')
              <div class="alert alert-danger" role="alert">
                  {{ $message }}
              </div>
          @enderror
      </div>


        <div class="mb-3">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Alamat" id="alamat" style="height: 100px" name="alamat"></textarea>
                <label for="floatingTextarea2">Alamat</label>
            </div>
            @error('alamat')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="tanggalLahir" class="form-label">Tanggal Lahir:</label>
            <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control">
            @error('tanggalLahir')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
@endsection
