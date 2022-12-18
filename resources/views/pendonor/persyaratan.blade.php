@extends('template')
@section('title', 'Halaman Utama')

@section('content')
    Pendonor harus tidak memenuhi kriteria sebagai berikut:
    <form method="POST" action="{{ route('persyaratan') }}">
        @csrf
        <input type="hidden" name="id" value="{{session()->get('idPengguna')}}">
        <div class="mb-3">
            {{-- cek1 --}}
            <label for="cek1">Pernah menderita Hepatitis B ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek1" id="cek1" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek1" id="cek1" value="0" checked> TIDAK
                </label>
            </div>
            {{-- cek2 --}}
            <label for="cek2">Dalam jangka waktu 6 bulan sesudah kontak erat dengan penderita hepatitis ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek2" id="cek2" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek2" id="cek2" value="0" checked> TIDAK
                </label>
            </div>
            {{-- cek3 --}}
            <label for="cek3">Dalam jangka waktu 6 bulan sesudah mendapat transfusi ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek3" id="cek3" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek3" id="cek3" value="0" checked> TIDAK
                </label>
            </div>
            {{-- cek4 --}}
            <label for="cek4">Dalam jangka waktu 6 bulan sesudah tato/tindik telinga ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek4" id="cek4" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek4" id="cek4" value="0" checked> TIDAK
                </label>
            </div>
            {{-- cek5 --}}
            <label for="cek5">Dalam jangka waktu 72 jam sesudah operasi gigi ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek5" id="cek5" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek5" id="cek5" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek6 --}}
            <label for="cek5">Dalam jangka waktu 6 bulan sesudah operasi kecil ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek6" id="cek6" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek6" id="cek6" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek7 --}}
            <label for="cek7">Dalam jangka waktu 24 jam sesudah vaksinasi polio, influenza, kolera, stetanus dipteria atau
                profilaksis ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek7" id="cek7" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek7" id="cek7" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek8 --}}
            <label for="cek8">Dalam jangka waktu 2 minggu sesudah vaksinasi virus hidup parotitis epidemica, measles dan
                tetanus toxin ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek8" id="cek8" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek8" id="cek8" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek9 --}}
            <label for="cek9">Dalam jangka waktu 1 tahun sesudah injeksi terakhir imunisasi rabies therapeutic ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek9" id="cek9" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek9" id="cek9" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek10 --}}
            <label for="cek10">Dalam jangka waktu 1 minggu sesudahgejala alergi menghilang ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek10" id="cek10" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek10" id="cek10" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek11 --}}
            <label for="cek11">Dalam jangka waktu 1 tahun sesudah transplantasi kulit ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek11" id="cek11" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek11" id="cek11" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek12 --}}
            <label for="cek12">Sedang hamil dan dalam jangka waktu 6 bulan sesudah persalinan ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek12" id="cek12" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek12" id="cek12" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek13 --}}
            <label for="cek13">Sedang menyusui ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek13" id="cek13" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek13" id="cek13" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek14 --}}
            <label for="cek14">Ketergantungan obat ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek14" id="cek14" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek14" id="cek14" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek15 --}}
            <label for="cek15">Alkoholisme akut dan kronis ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek15" id="cek15" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek15" id="cek15" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek16 --}}
            <label for="cek16">Mengidap Sifilis ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek16" id="cek16" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek16" id="cek16" value="0" checked> TIDAK
                </label>
            </div>

            {{-- cek17 --}}
            <label for="cek17">Menderita Tuberkulosis secara klinis ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek17" id="cek17" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek17" id="cek17" value="0" checked> TIDAK
                </label>
            </div>
            {{-- cek18 --}}
            <label for="cek18">Menderita epilepsi dan sering kejang ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek18" id="cek18" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek18" id="cek18" value="0" checked> TIDAK
                </label>
            </div>
            {{-- cek19 --}}
            <label for="cek19">Menderita penyakit kulit pada vena (pembuluh darah balik) yang akan ditusuk ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek19" id="cek19" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek19" id="cek19" value="0" checked> TIDAK
                </label>
            </div>
            {{-- cek20 --}}
            <label for="cek20">Mempunyai kecenderungan perdarahan atau penyakit darah, misalnya thalasemia ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek20" id="cek20" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek20" id="cek20" value="0" checked> TIDAK
                </label>
            </div>

             {{-- cek21 --}}
             <label for="cek21">Seseorang yang termasuk kelompok masyarakat yang berisiko tinggi mendapatkan HIV dan AIDS (homoseks, morfinis, berganti-ganti pasangan seks dan pemakai jarum suntik tidak steril) ?</label>
             <div class="mb-3">
                 <label class="radio-inline ">
                     <input type="radio" name="cek21" id="cek21" value="1" > YA
                 </label>
                 <label class="radio-inline">
                     <input type="radio" name="cek21" id="cek21" value="0" checked> TIDAK
                 </label>
             </div>

              {{-- cek22 --}}
            <label for="cek22">Pengidap HIV dan AIDS menurut hasil pemeriksaan saat donor darah ?</label>
            <div class="mb-3">
                <label class="radio-inline ">
                    <input type="radio" name="cek22" id="cek22" value="1" > YA
                </label>
                <label class="radio-inline">
                    <input type="radio" name="cek22" id="cek22" value="0" checked> TIDAK
                </label>
            </div>

             {{-- cek23 --}}
             <label for="cek16">Syarat donor darah untuk perempuan, sebaiknya sedang tidak dalam masa haid?</label>
             <div class="mb-3">
                 <label class="radio-inline ">
                     <input type="radio" name="cek23" id="cek23" value="1" > YA
                 </label>
                 <label class="radio-inline">
                     <input type="radio" name="cek23" id="cek23" value="0" checked> TIDAK
                 </label>
             </div>

            <button type="submit" class="btn btn-primary">SELESAI</button>
    </form>
@endsection
