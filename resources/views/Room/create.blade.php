@extends('layout.main')

@section('title','Form Tambah Data Ruangan')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-8">
        <h1 class="mt-3">Form Tambah Data Pengguna Kelas</h1>
          
        <form method="post" action="/room">
        @csrf
  <div class="form-group">
    <label for="kelas_id">ID Kelas</label>
    <input type="text" class="form-control @error('kelas_id') is-invalid @enderror" id="kelas_id" placeholder="Masukan Kode Ruangan" name="kelas_id" value="{{ old('kelas_id')}}">
    @error('kelas_id')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div> 
  <div class="form-group">
    <label for="nama">Nama Kelas</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama Kelas" name="nama" value="{{ old('nama')}}">
    @error('nama')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror 
  </div>
 
  <div class="form-group">
    <label for="angkatan">Angkatan</label>
    <input type="text" class="form-control @error('angkatan') is-invalid @enderror" id="angkatan" placeholder="Masukan Kode Ruangan" name="angkatan" value="{{ old('angkatan')}}">
    @error('angkatan')
     <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div> 
 <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
        </div>
       </div>
    </div>
@endsection
    







