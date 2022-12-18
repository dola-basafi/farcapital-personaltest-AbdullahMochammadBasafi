@extends('template')
@section('title', 'Halaman Utama')

@section('content')
    <form method="POST" action="{{ route('checkup',['id'=>$id]) }}">
        @csrf
        {{-- <input type="hidden" name="id" value="{{$id}}"> --}}
        {{-- cek1 --}}
        <label for="cek1">Usia 17-60 tahun (usia 17 tahun
            diperbolehkan menjadi donor bila
            mendapat izin tertulis dari orangtua) ?</label>
        <div class="mb-3">
            <label class="radio-inline ">
                <input type="radio" name="cek1" id="cek1" value="1" {{$umur>16 ? 'checked':''}}> YA
            </label>
            <label class="radio-inline">
                <input type="radio" name="cek1" id="cek1" value="0" {{$umur>16 ? '':'checked'}}> TIDAK
            </label>
        </div>
        {{-- cek2 --}}
        <label for="cek2">Berat badan minimal 45 kg ?</label>
        <div class="mb-3">
            <label class="radio-inline ">
                <input type="radio" name="cek2" id="cek2" value="1"> YA
            </label>
            <label class="radio-inline">
                <input type="radio" name="cek2" id="cek2" value="0" checked> TIDAK
            </label>
        </div>
        {{-- cek3 --}}
        <label for="cek3">Temperatur tubuh 36,6 - 37,5 derajat Celcius ?</label>
        <div class="mb-3">
            <label class="radio-inline ">
                <input type="radio" name="cek3" id="cek3" value="1"> YA
            </label>
            <label class="radio-inline">
                <input type="radio" name="cek3" id="cek3" value="0" checked> TIDAK
            </label>
        </div>
        {{-- cek4 --}}
        <label for="cek4">- Tekanan darah baik yaitu sistole = 110-160 mmHg, diastole = 70-100 mmHg?</label>
        <div class="mb-3">
            <label class="radio-inline ">
                <input type="radio" name="cek4" id="cek4" value="1"> YA
            </label>
            <label class="radio-inline">
                <input type="radio" name="cek4" id="cek4" value="0" checked> TIDAK
            </label>
        </div>
        {{-- cek5 --}}
        <label for="cek5">Usia 17-60 tahun (usia 17 tahun
            diperbolehkan menjadi donor bila
            mendapat izin tertulis dari orangtua) ?</label>
        <div class="mb-3">
            <label class="radio-inline ">
                <input type="radio" name="cek5" id="cek5" value="1"> YA
            </label>
            <label class="radio-inline">
                <input type="radio" name="cek5" id="cek5" value="0" checked> TIDAK
            </label>
        </div>
        {{-- cek6 --}}
        <label for="cek6">Denyut nadi teratur yaitu sekitar 50-100
            kali/menit ?</label>
        <div class="mb-3">
            <label class="radio-inline ">
                <input type="radio" name="cek6" id="cek6" value="1"> YA
            </label>
            <label class="radio-inline">
                <input type="radio" name="cek6" id="cek6" value="0" checked> TIDAK
            </label>
        </div>

        {{-- cek7 --}}
        <label for="cek7">Hemoglobin perempuan minimal 12 gram, sedangkan untuk laki-laki minimal 12,5 gram ?</label>
        <div class="mb-3">
            <label class="radio-inline ">
                <input type="radio" name="cek7" id="cek7" value="1"> YA
            </label>
            <label class="radio-inline">
                <input type="radio" name="cek7" id="cek7" value="0" checked> TIDAK
            </label>
        </div>


        <button type="submit" class="btn btn-primary">SELESAI</button>
    </form>
@endsection
