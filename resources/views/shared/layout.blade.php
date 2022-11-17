<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }} - Klinik DAC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-light box shadow px-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Klinik DAC</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Home' ? 'active border-bottom border-primary border-2' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Data Pasien' ? 'active border-bottom border-primary border-2' : '' }}" href="/pasien">Pasien</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Data Berobat' ? 'active border-bottom border-primary border-2' : '' }}" href="/berobat">Berobat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Data Dokter' ? 'active border-bottom border-primary border-2' : '' }}" href="/dokter">Dokter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Data Obat' ? 'active border-bottom border-primary border-2' : '' }}" href="/obat">Obat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title == 'Rumah Sakit Rujukan' ? 'active border-bottom border-primary border-2' : '' }}" href="/rs_rujuk">RS Rujukan</a>
                        </li>
                        </ul>
                    </div>
                    <a class="btn btn-outline-dark" href="#">Logout</a>
                </div>
            </nav>
        </header>

        <div class="container">
            <main class="pb-3">
                <div class="my-3 col-md-5 shadow">
                    @include('components.message')
                </div>
                @yield('main-content')
            </main>
        </div>
        
        <footer class="border-top footer text-muted">
            <div class="container my-3">
                &copy; 2022 - Klinik DAC - <a href="#">Privacy</a>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>



