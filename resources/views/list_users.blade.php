@extends('layout.main')

@section('title','User')



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
@endsection

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'user/json',
        columns: [
            
            { data: 'id'},
            { data: 'nama_kelas', name: 'nama_kelas' },
            { data: 'kode_ruangan', name: 'kode_ruangan' },
            { data: 'nama_gedung', name: 'nama_gedung' }
        ]
    });
});
</script>
@endpush