<aside class="text-dark d-flex flex-column" style="width: 250px; min-height: 100vh;">



    <nav class="flex-grow-1 px-3 py-4">
        <div class="mb-0">
            <a href="{{ route('dashboard') }}" class="d-block text-decoration-none text-dark px-4 py-2 rounded {{ request()->routeIs('dashboard') ? 'bg-primary text-white' : 'text-dark' }}" 
            style="transition: background-color 0.2s;"
            onmouseover="if(!this.classList.contains('bg-primary')) this.classList.add('bg-secondary', 'text-white');"
            onmouseout="if(!this.classList.contains('bg-primary')) this.classList.remove('bg-secondary', 'text-white');"> 
                Dashboard
            </a>
        </div>
        <br>
        <div class="mb-0">
            <a href="{{ route('profile') }}" class="d-block text-decoration-none text-dark px-4 py-2 rounded {{ request()->routeIs('profile') ? 'bg-primary text-white' : 'text-dark' }}" 
            style="transition: background-color 0.2s;"
            onmouseover="if(!this.classList.contains('bg-primary')) this.classList.add('bg-secondary', 'text-white');"
            onmouseout="if(!this.classList.contains('bg-primary')) this.classList.remove('bg-secondary', 'text-white');"> 
                Profile
            </a>
        </div>
        <br>
        <div class="mb-0">
            <a href="{{ route('pengelolaan') }}" class="d-block text-decoration-none text-dark px-4 py-2 rounded {{ request()->routeIs('pengelolaan') ? 'bg-primary text-white' : 'text-dark' }}" 
            style="transition: background-color 0.2s;"
            onmouseover="if(!this.classList.contains('bg-primary')) this.classList.add('bg-secondary', 'text-white');"
            onmouseout="if(!this.classList.contains('bg-primary')) this.classList.remove('bg-secondary', 'text-white');"> 
                pengelolaan
            </a>
        </div>
    </nav>
</aside>