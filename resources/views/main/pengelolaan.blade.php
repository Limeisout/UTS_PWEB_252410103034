@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
    <h1>Pengelolaan</h1>

    <input type="text" class="form-control mb-3" placeholder="Cari...">

    <select class="form-select mb-3" aria-label="Filter">
        <option value="1">Nama Buku</option>
        <option value="2">Penulis</option>
        <option value="3">Kategori</option>
        <option value="4">Tahun</option>
        <option value="5">Status</option>
    </select>

    <button class="btn btn-primary mb-3">Tambah Buku</button>

    <div class="table-responsive">
        <table class="table tabel-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>no</th>
                    <th>Nama Buku</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Tahun</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($buku as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item['judul'] }}</td>
                        <td>{{ $item['pengarang'] }}</td>
                        <td>{{ $item['penerbit'] }}</td>
                        <td>{{ $item['tahun_terbit'] }}</td>
                        <td>{{ $item['stok'] }}</td>
                        <td>
                            @if($item['stok'] > 0)
                                <span class="badge bg-success">Tersedia</span>
                            @else
                                <span class="badge bg-danger">Dipinjam</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada data buku.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection