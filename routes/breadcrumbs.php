<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
});

// Authors
Breadcrumbs::for('authors.index', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Penulis', route('authors.index'));
});

Breadcrumbs::for('authors.create', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Penulis', route('authors.index'));
    $trail->push('Tambah', route('authors.create'));
});

Breadcrumbs::for('authors.edit', function ($trail, $author) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Penulis', route('authors.index'));
    $trail->push('Edit', route('authors.edit', $author));
});

// Authors
Breadcrumbs::for('books.index', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Buku', route('books.index'));
});

Breadcrumbs::for('books.create', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Buku', route('books.index'));
    $trail->push('Tambah', route('books.create'));
});

Breadcrumbs::for('books.edit', function ($trail, $author) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Buku', route('books.index'));
    $trail->push('Edit', route('books.edit', $author));
});
