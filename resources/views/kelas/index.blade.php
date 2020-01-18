@extends('layout.main')

@section('title','Ruangan')

@section('container')
<div style="background-image: url('images/kls1.png');">
    <div class="container">
      <div class="row">
        <div class="col-6">
        <h1 class="mt-3" >Daftar Ruangan</h1>
        <a href="/kelas/create" class="btn btn-primary my-3">Tambah Data Ruangan</a>
         @if (session('status'))
         <div class="alert alert-success">
         {{ session('status') }}
         </div>
         @endif
          <ul class="list-group">
          @foreach( $kelas as $kelas)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{ $kelas->nama_kelas }}
    <a href="/kelas/{{ $kelas->id }}" class="badge badge-info">Detail</a>
  </li>
  @endforeach
</ul>
        </div>
       </div>
    </div>
    </div>
@endsection
    







