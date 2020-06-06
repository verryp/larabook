<a href="{{ route('author.edit', $model) }}" class="btn btn-info">
    <i class="fas fa-edit"></i>
</a>

<button href="{{ route('author.destroy', $model) }}" class="btn btn-danger" id="delete">
    <i class="fas fa-trash"></i>
</button>

<script>
    $('button#delete').on('click', function (e) {
        e.preventDefault()

        let href = $(this).attr('href')

        document.getElementById('delete-form').action = href
        document.getElementById('delete-form').submit()
    })
</script>
