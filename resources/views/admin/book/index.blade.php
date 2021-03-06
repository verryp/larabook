@extends('admin.templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mt-2">Daftar Buku</h3>
                </div>

                <div class="card-body">
                    <table id="authors-table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Cover</th>
                                <th>Kuantitas</th>
                                <th>Deskripsi</th>
                                <th>Penulis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<form method="POST" id="delete-form">
    @csrf
    @method('delete')

    <input type="submit" value="hapus" style="display:none">
</form>
@endsection


@push('script')
@include('admin.templates.partials.alert')
<script>
    $(function () {
            $('#authors-table').DataTable({
                processing: true,
                serverSide: true,
                info: false,
                ajax: '{{ route('books.data') }}',
                dom: '<"btn-tambah">frtlp',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable: false},
                    { data: 'name'},
                    { data: 'cover'},
                    { data: 'quantity'},
                    { data: 'description'},
                    { data: 'author'},
                    { data: 'action', align: 'center'}
                ],
            })

            $('div.btn-tambah').html('<a href="{{ route('books.create') }}" class="btn btn-primary mb-n5">Tambah</a>')
        })
</script>
@endpush
