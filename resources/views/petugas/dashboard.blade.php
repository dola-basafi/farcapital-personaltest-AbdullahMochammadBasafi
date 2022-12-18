@php
    $dashboard=true;
@endphp
    

@extends('template')
@section('title', 'Halaman Utama')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Status Persyaratan</th>
      <th scope="col">Status Check</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    {{-- @dd($dataPendonor) --}}
    @foreach ($dataPendonor as $pendonor)
    <tr>
      <td> {{$pendonor->nama}} </td>
      <td> {{$pendonor->statusPersyaratan ? 'boleh':'tidak boleh'}}</td>
      <td> {{$pendonor->statusCheckKesehatan ? 'boleh':'tidak boleh'}} </td>
      <td> <a href="{{route('penggunaData',['id' =>$pendonor->id])}}" class="btn btn-primary">Detail</a> </td>
    </tr>       
    @endforeach
  </tbody>
</table>
@endsection