@extends('admin.templates.default')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Buku</h5>
                    <p class="card-text">
                        <form action="{{ route('books.update', $book) }}" method="POST">
                            @csrf
                            @method("PUT")

                            <div class="form-group">
                                <label for="name">Judul Buku</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="Judul Buku" value="{{ old('name') ?? $book->name }}" required>

                                @error('name')
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
