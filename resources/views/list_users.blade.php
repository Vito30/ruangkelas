@extends('layout')

@section('title','User')

@section('nav')
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container">
  <a class="navbar-brand" href="#"> <b><span>{{ auth()->user()->name }}</span></b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ url('/') }}">Dashboard </a>
      <a class="nav-item nav-link" href="{{ url('/ruang') }}">Tabel</a>
      <a class="nav-item nav-link" href="{{ url('/user') }}">Daftar Ruangan</a>
      <a class="nav-item nav-link" href="{{ url('/kelas') }}">Detail Ruangan</a>
      <a class="nav-item nav-link" href="{{ url('/room') }}">Detail Pengguna</a>
      <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-d my-2 my-sm-0" href="{{ url('/logout') }}">Logout</a>
     </form>
    </div>
  </div>
  </div>
</nav>
@endsection

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Kode Ruangan</th>
                <th>Nama Gedung</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'user/json',
        columns: [
             {"data": "id",
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
            { data: 'nama_kelas', name: 'nama_kelas' },
            { data: 'kode_ruangan', name: 'kode_ruangan' },
            { data: 'nama_gedung', name: 'nama_gedung' }
        ]
    });
});
</script>
@endpush