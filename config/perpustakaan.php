<?php

return [
    'users' => [
    ['name' => 'eric', 'email' => 'admin@perpus.com', 'password' => 'admin123', 'role' => 'admin'],
    ],

    'buku' => [
        ['judul' => 'Buku 1', 'pengarang' => 'Pengarang 1', 'penerbit' => 'Penerbit 1', 'tahun_terbit' => 2020, 'stok' => 10],
        ['judul' => 'Buku 2', 'pengarang' => 'Pengarang 2', 'penerbit' => 'Penerbit 2', 'tahun_terbit' => 2021, 'stok' => 5],
        ['judul' => 'Buku 3', 'pengarang' => 'Pengarang 3', 'penerbit' => 'Penerbit 3', 'tahun_terbit' => 2019, 'stok' => 8],
    ],

    'statistik' => ['total_buku' => 120, 'total_anggota' => 50, 'dipinjam' => 14, 'tersedia' => 108,
    ],
];