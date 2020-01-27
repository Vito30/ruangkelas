@extends('layout.main')

@section('title','Form Edit Data Ruangan')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Form Edit Data Ruangan</h1>
          
        <form method="post" action="/kelas/{{ $kelas->id }}">
        @method('patch')
        @csrf
  <div class="form-group">
    <label for="nama_kelas">Nama Kelas</label>
    <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror" id="nama_kelas" placeholder="Masukan Nama Kelas" name="nama_kelas" value="{{ $kelas->nama_kelas}}">
    @error('nama_kelas')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror 
  </div>
 
  <div class="form-group">
    <label for="kode_ruangan">Kode Ruangan</label>
    <input type="text" class="form-control @error('kode_ruangan') is-invalid @enderror" id="kode_ruangan" placeholder="Masukan Kode Ruangan" name="kode_ruangan" value="{{ $kelas->kode_ruangan}}">
    @error('kode_ruangan')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="nama_gedung">Nama Gedung</label>
    <input type="text" class="form-control @error('nama_gedung') is-invalid @enderror" id="nama_gedung" placeholder="Masukan Nama Gedung" name="nama_gedung" value="{{ $kelas->nama_gedung}}">
    @error('nama_gedung')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
 <button type="submit" class="btn btn-primary">Edit Data</button>
</form>
<a href="/kelas" class="btn btn-success my-3">Kembali</a>
        </div>
       </div>
    </div>
@endsection
    







