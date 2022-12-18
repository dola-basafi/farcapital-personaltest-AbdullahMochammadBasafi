@extends('template')
@section('title', 'Halaman Utama')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Status Persyaratan</th>
      <th scope="col">Status Check</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
    <tr>
      <td> {{$pendonor->nama}} </td>
      <td> {{$pendonor->alamat}} </td>
      <td> {{$pendonor->tanggalLahir}} </td>
      <td> {{$pendonor->jenisKelamin ? 'Pria':'Wanita'}} </td>
      <td> {{$pendonor->statusPersyaratan ? 'boleh':'tidak boleh'}}</td>
      <td> {{$pendonor->statusCheckKesehatan ? 'boleh':'tidak boleh'}} </td>
      <td> <a href="{{route('checkupData',['id' => $pendonor->id])}}" class="btn btn-primary">Check Up</a> </td>
    </tr>       
    
  </tbody>
</table>
@endsection