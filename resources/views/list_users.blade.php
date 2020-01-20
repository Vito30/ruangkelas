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
      <a class="nav-item nav-link" href="{{ url('/ruang') }}">Daftar</a>
      <a class="nav-item nav-link" href="{{ url('/kelas') }}">Detail</a>
      <a class="nav-item nav-link" href="{{ url('/user') }}">User</a>
      <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-dark my-2 my-sm-0" href="{{ url('/logout') }}">Logout</a>
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
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
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
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
        ]
    });
});
</script>
@endpush