@extends('layout.main')

@section('title','Form Edit Data Ruangan')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Form Edit Data Ruangan</h1>
          
        <form method="post" action="/room/{{ $rooms->id }}">
        @method('patch')
        @csrf
  <div class="form-group">
    <label for="kelas_id">ID Ruangan</label>
    <input type="text" class="form-control @error('kelas_id') is-invalid @enderror" id="kelas_id" placeholder="Masukan ID Ruangan" name="kelas_id" value="{{ $rooms->kelas_id}}">
    @error('kelas_id')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror 
  </div>
 
  <div class="form-group">
    <label for="nama">Nama Kelas</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Kelas" name="nama" value="{{ $rooms->nama}}">
    @error('nama')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="angkatan">Angkatan</label>
    <input type="text" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" placeholder="Masukan Angkatan" name="angkatan" value="{{ $rooms->angkatan}}">
    @error('angkatan')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
 <button type="submit" class="btn btn-primary">Edit Data</button>
</form>
<a href="/room" class="btn btn-success my-3">Kembali</a>
        </div>
       </div>
    </div>
@endsection
    







