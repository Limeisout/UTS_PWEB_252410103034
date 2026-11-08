@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="text-center mb-5 mt-4">
        <h1 class="fw-bold">Dashboard</h1>
    </div>

    <hr class="mb-5">    

    <h2 class="fw-bold text-center mb-5">Statistik</h2>

    <div class="row justify-content-center g-4 mb-5">

        <div class="col-6 col-md-2">
            <div class="card text-center border rounded-4 py-4 shadow-sm">
                <div class="card-body">
                    <h3 class="fw-bold">150</h3>
                    <p class="text-muted mb-0">buku</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-2">
            <div class="card text-center border rounded-4 py-4 shadow-sm">
                <div class="card-body">
                    <h3 class="fw-bold">45</h3>
                    <p class="text-muted mb-0">anggota</p>
                </div>
            </div>
        </div>

         <div class="col-6 col-md-2">
            <div class="card text-center border rounded-4 py-4 shadow-sm">
                <div class="card-body">
                    <h3 class="fw-bold">12</h3>
                    <p class="text-muted mb-0">buku<br>dipinjam</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-2">
            <div class="card text-center border rounded-4 py-4 shadow-sm">
                <div class="card-body">
                    <h3 class="fw-bold">8</h3>
                    <p class="text-muted mb-0">kategori</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection