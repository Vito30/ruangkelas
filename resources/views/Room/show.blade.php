@extends('layout.main')

@section('title','Detail Ruangan')

@section('container')
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <div class="container">
      <div class="row">
        <div class="col-6">
        <h1 class="mt-3">Detail Kelas</h1>
          
        <div class="card" >
          <div class="card-body">
            <h5 class="card-title">{{ $rooms->nama }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $rooms->angkatan }}</h6>

            <a href="{{ $rooms->id }}/edit" class="btn btn-primary">Edit</a>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
  Hapus
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Apakah Anda Yakin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Jika anda pilih ya maka akan terhapus
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
       <form action="{{ $rooms->id }}" method="post" class="d-inline">
       {{ method_field('delete') }}
       @csrf
        <button type="submit" class="btn btn-primary">Ya</button>
        </form>
      </div>
    </div>
  </div>
</div>
            <a href="/rooms" class="btn btn-danger">Kembali</a>
          </div>
        </div>
        </div>
       </div>
    </div>
@endsection
    







