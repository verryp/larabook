@extends('admin.templates.default')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Buku</h5>
                    <p class="card-text">
                        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Judul</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="Judul Buku" value="{{ old('name') }}" required autocomplete="name"
                                    autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" id="description" cols="30" rows="3"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Deskripsi">{{ old('description') }}</textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="author_id">Penulis</label>
                                <select name="author_id" id="author_id"
                                    class="form-control select2 @error('author_id') is-invalid @enderror">
                                    <option value="">Pilih Penulis</option>
                                    @foreach ($authors as $author)
                                    <option value="{{ old('author_id') ?? $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>

                                @error('author_id')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="cover">Sampul</label>
                                <input type="file" class="form-control @error('cover') is-invalid @enderror"
                                    name="cover" placeholder="Judul Buku" value="{{ old('cover') }}" autofocus>

                                @error('cover')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="quantity">Jumlah</label>
                                <input type="number" class="form-control @error('quantity') is-invalid @enderror"
                                    name="quantity" placeholder="Jumlah" value="{{ old('quantity') }}" required>

                                @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="row form-group justify-content-end mr-0">
                                <input type="submit" value="simpan" class="btn btn-primary">
                            </div>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('select2css')
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}">
@endpush

@push('script')
<script src="{{ asset('assets/plugins/select2/dist/js/select2.full.min.js') }}"></script>

<script>
    $('#author_id').select2()
</script>
@endpush
