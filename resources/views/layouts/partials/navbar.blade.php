<!-- <header class="flex items-center justify-between h-16 px-6">

    <div class="flex items-center">
        <h2 class="text-xl font-semibold text-white">BukuKita</h2>
    </div>

    <div class="d-flex align-items-center ms-auto">
        <span class="text-sm text-white">{{ auth()->user()->name ?? 'Guest' }}</span>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="text-sm text-red-600 hover:underline">Logout</button>
        </form>
    </div>
</header> -->

@php
    $user = session('user');
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid ">
        <h1 class="navbar-brand px-4">BukuKita</h1>

        <div class="collapse navbar-collapse">
            <div class="d-flex align-items-center ms-auto">
                <span class="text-sm text-white me-3">Halo, {{ $user['name'] ?? 'guest' }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <!-- <button type="submit" class="text-sm text-red-600 hover:underline">Logout</button> -->
                    <a href="{{ route('logout') }}" class="btn btn-outline-danger ms-2" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>
            </div>
        </div>
    </div>
</nav> 