@extends('layout.main')

@section('title','Ruangan')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-10">
        <h1 class="mt-3">Daftar Ruangan</h1>
         <table class="table">
         <thead class="thead-dark">
          <tr>
           <th scope="col">No</th>
           <th scope="col">Nama Kelas</th>
           <th scope="col">Kode Ruangan</th>
           <th scope="col">Nama Gedung</th>
          </tr>
         </thead> 
         <tbody>
         @foreach($ruang as $rng)
          <tr>
           <th scope="row">{{ $loop->iteration }}</th>
           <td>{{$rng ->nama_kelas}}</td>
           <td>{{$rng ->kode_ruangan}}</td>
           <td>{{$rng ->nama_gedung}}</td>
          </tr>
          @endforeach
         </tbody>
         </table>
        </div>
       </div>
    </div>
@endsection
    
