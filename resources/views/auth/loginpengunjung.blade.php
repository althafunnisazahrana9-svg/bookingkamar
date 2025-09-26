<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Pengunjung | Hotel Aetheria</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body
    style="background: url('{{ asset('images/hotelbg.jpg') }}') no-repeat center center fixed; background-size: cover;">

    <!-- Background hotel -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: url('{{ asset('images/hotelbg.jpg') }}') no-repeat center center / cover; filter: blur(6px);">
    </div>

    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <!-- Logo -->
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="rounded-circle mb-2"
                            width="80" height="80">
                        <h4 class="fw-bold">Hotel Aetheria</h4>
                        <p class="text-muted mb-0">Login Pengunjung</p>
                    </div>

                    <!-- Form -->
                    <form action="{{ route('pengunjung.login') }}" method="POST">
                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Masukkan email" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Masukkan kata sandi" required>
                        </div>

                        <!-- Tombol Login -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Login
                            </button>
                        </div>

                        <!-- Error -->
                        @if ($errors->any())
                            <div class="alert alert-danger mt-2">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
