@extends('layout.main')

@section('title','Detail Ruangan')

@section('container')
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <div class="container">
      <div class="row">
        <div class="col-6">
        <h1 class="mt-3">Detail Ruangan</h1>
          
        <div class="card" >
          <div class="card-body">
            <h5 class="card-title">{{ $kelas->nama_kelas }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $kelas->kode_ruangan }}</h6>
            <p class="card-text">{{ $kelas->nama_gedung }}</p>

            <a href="{{ $kelas->id }}/edit" class="btn btn-primary">Edit</a>
            <form action="/kelas/{{ $kelas->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            <a href="/kelas" class="card-link">Kembali</a>
          </div>
        </div>
        </div>
       </div>
    </div>
@endsection
    







