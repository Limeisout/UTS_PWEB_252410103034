<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .login-wrapper { min-height: 100vh;}
        .border-divider { border-right: 1px solid #dee2e6; }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row g-0 login-wrapper">
            <div class="col-md-6 d-flex align-items-center justify-content-center border-divider p-4">
                <div class="text-center">
                    <h2 class="fw-bold">SELAMAT DATANG</h2>
                    <h2 class="fw-bold">DI BukuKita</h2>
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-center justify-content-center p-4">
                <div class="w-100" style="max-width: 350px;">
                    <h3 class="mb-4 text-center">LOGIN</h3>

                    <form action="{{ route('login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input for="email" name="email" class="form-control form-control-lg bg-light" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input for="password" name="password" type="password" class="form-control form-control-lg bg-light" placeholder="Password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>