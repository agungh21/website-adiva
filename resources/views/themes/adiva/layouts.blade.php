<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="#" type="image/png">
    <title>PT Adiva Sumber Solusi</title>

     <!-- Bootstrap CSS -->
     <link href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

     <link href="{{ asset('assets/css/carousel.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/main-style.css') }}" rel="stylesheet">

     <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
</head>

<body>

    {{-- nav-bar --}}
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark main-navbar">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Adiva</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    {{-- content --}}
    @yield('content')

    {{-- footer --}}
      <!-- FOOTER -->
    <footer class="container-fluid main-content-footer">
        <p>&copy; {{ date('Y') }} PT Adiva Sumber Solusi</p>
    </footer>

    {{-- javascript --}}
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.js') }}"></script>
</body>

</html>
