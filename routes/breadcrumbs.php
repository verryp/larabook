<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
});

// Authors
Breadcrumbs::for('author.index', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Penulis', route('author.index'));
});

Breadcrumbs::for('author.create', function ($trail) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Penulis', route('author.index'));
    $trail->push('Tambah', route('author.create'));
});

Breadcrumbs::for('author.edit', function ($trail, $author) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Penulis', route('author.index'));
    $trail->push('Edit', route('author.edit', $author));
});
