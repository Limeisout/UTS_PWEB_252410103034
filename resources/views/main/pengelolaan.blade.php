@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
    <h1 class="mb-5">Pengelolaan</h1>

    <div class="col d-flex">
        <form method="GET" action="{{ route('pengelolaan') }}" class="d-flex">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control mb-3 flex-grow-0 flex-shrink-0 w-auto" placeholder="Cari...">

            <select name="filter" class="form-select mb-3 flex-grow-0 flex-shrink-0 w-auto ms-2" aria-label="Filter" onchange="this.form.submit()">
                <option value="">Semua</option>
                <option value="1" {{ request('filter') == '1' ? 'selected' : '' }}>Nama Buku</option>
                <option value="2" {{ request('filter') == '2' ? 'selected' : '' }}>Penulis</option>
                <option value="3" {{ request('filter') == '3' ? 'selected' : '' }}>Kategori</option>
                <option value="4" {{ request('filter') == '4' ? 'selected' : '' }}>Tahun</option>
                <option value="5" {{ request('filter') == '5' ? 'selected' : '' }}>Status</option>
                <option value="tersedia" {{ request('filter') == 'tersedia' ? 'selected' : '' }}>Status: Tersedia</option>
                <option value="dipinjam" {{ request('filter') == 'dipinjam' ? 'selected' : '' }}>Status: Dipinjam</option>
            </select>

            <button type="submit" class="btn btn-secondary mb-3 flex-grow-0 flex-shrink-0 w-auto ms-2">Cari</button>

            @if(request('search') || request('filter'))
                <a href="{{ route('pengelolaan') }}" class="btn btn-outline-secondary mb-3 flex-grow-0 flex-shrink-0 w-auto ms-2">Reset</a>
            @endif
        </form>

        <button class="btn btn-primary mb-3 flex-grow-0 flex-shrink-0 w-auto ms-2">Tambah Buku</button>
    </div>

    <div class="table-responsive">
        <table class="table tabel-bordered align-middle border rounded-4 shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>no</th>
                    <th>Nama Buku</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($buku as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item['judul'] }}</td>
                        <td>{{ $item['pengarang'] }}</td>
                        <td>{{ $item['kategori'] ?? $item['penerbit'] }}</td>
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
                        <td colspan="7" class="text-center">Tidak ada data buku.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection