<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Aetheria</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #D2B48C;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #D2B48C;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">LOGO</a>
            <form class="d-flex ms-auto me-4">
                <input class="form-control me-2" type="search" placeholder="Search">
                <button class="btn btn-light" type="submit">🔍</button>
            </form>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container bg-white rounded shadow my-5 p-4">
        <div class="row align-items-center">
            <!-- Left -->
            <div class="col-md-6">
                <div class="text-warning fs-5">★★★★★</div>
                <h1 class="fw-bold display-4" style="color: #A0522D;">HOTEL <br> AETHERIA</h1>
                <p class="text-muted">
                    Selamat datang di Hotel Aetheria – tempat di mana kenyamanan, kemewahan,
                    dan ketenangan berpadu sempurna. Nikmati pengalaman menginap yang tak terlupakan bersama kami.
                </p>
                <a href="{{ route('pages.form.index') }}" class="btn btn-success rounded-pill px-4">CHECK IN NOW</a>

                <div class="border rounded mt-4 p-3 d-flex align-items-center">
                    <span class="me-2">🏨</span>
                    <small class="text-muted">
                        HOTEL RULES: Check-in starts at 10:00, smoking is prohibited in the rooms, and pets are not
                        allowed.
                    </small>
                </div>
            </div>

            <!-- Right -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/emerald.jpg') }}" alt="Hotel" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
