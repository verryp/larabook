<a href="{{ route('authors.edit', $model) }}" class="btn btn-info">
    <i class="fas fa-edit"></i>
</a>

<button href="{{ route('authors.destroy', $model) }}" class="btn btn-danger" id="delete">
    <i class="fas fa-trash"></i>
</button>

<script>
    $('button#delete').on('click', function(e) {
        e.preventDefault()

        let href = $(this).attr('href')

        Swal.fire({
            title: 'Apakah yakin hapus data?',
            text: "Data yang sudah dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                document.getElementById('delete-form').action = href
                document.getElementById('delete-form').submit()
            }
        })
    })
</script>