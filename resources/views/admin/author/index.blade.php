@extends('admin.templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mt-2">Daftar Penulis</h3>
                </div>

                <div class="card-body">
                    <table id="authors-table" class="table table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('script')
<script>
    $(function () {
            $('#authors-table').DataTable({
                processing: true,
                serverSide: true,
                info: false,
                ajax: '{{ route('author.data') }}',
                dom: '<"btn-tambah">frtlp',
                columns: [
                    { data: 'id'},
                    { data: 'name'},
                ],
            })

            $('div.btn-tambah').html('<a href="#" class="btn btn-primary mb-n5">Tambah</a>')
        })
</script>
@endpush
