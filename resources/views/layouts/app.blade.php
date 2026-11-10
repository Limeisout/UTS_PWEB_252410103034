<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        @include('layouts.partials.navbar')
    </nav>
    <div class="container-fluid" style="padding-top: 60px;">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="min-height: 100vh;">
                @include('layouts.partials.sidebar')
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="padding-top: 60px;">
                @yield('content')
            </main>
        </div>
    </div>
    <!-- <div class="d-flex"> -->
        <!-- Sidebar -->
        <!-- @include('layouts.partials.sidebar') -->

        <!-- Main Wrapper -->
        <!-- <div class="flex-grow-1 d-flex flex-column"> -->
            <!-- Navbar -->
            <!-- @include('layouts.partials.navbar') -->

            <!-- Main Content -->
            <!-- <main class="p-4"> -->
                <!-- @yield('content') -->
            <!-- </main> -->
        <!-- </div> -->
    <!-- </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

