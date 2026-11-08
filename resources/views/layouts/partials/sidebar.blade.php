<aside class="w-64 bg-gray-800 text-white flex flex-col">



    <nav class="flex-1 px-4 py-4 space-y-2">
        <a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('dashboard') ? 'bg-gray-700' : '' }}">
            Dashboard
        </a>
        <br>
        <a href="{{ route('profile') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('profile') ? 'bg-gray-700' : '' }}">
            Profile
        </a>
        <br>
        <a href="{{ route('pengelolaan') }}" class="block px-4 py-2 rounded hover:bg-gray-700 {{ request()->routeIs('pengelolaan') ? 'bg-gray-700' : '' }}">
            Pengelolaan
        </a>
    </nav>
</aside>
