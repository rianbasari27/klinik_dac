<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }} - Klinik DAC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/6a5458a5a6.js" crossorigin="anonymous"></script>
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

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        </style>
    </head>
    <body>

        {{-- Body --}}

        <main class="d-flex flex-nowrap">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="/img/dmc_logo.png" alt="Logo DMC" style="width: 220px">
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link {{ $title == 'Dashboard' ? 'active' : 'text-white' }}" aria-current="page">
                        <i class="fas fa-tachometer-alt-fast me-3 fs-5"></i>
                        Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/pasien" class="nav-link {{ $title == 'Data Pasien' ? 'active' : 'text-white' }}">
                        <i class="fas fa-user-injured me-3 fs-5"></i>
                        Pasien
                        </a>
                    </li>
                    <li>
                        <a href="/berobat" class="nav-link {{ $title == 'Data Berobat' ? 'active' : 'text-white' }}">
                        <i class="fas fa-procedures me-3 fs-6"></i>
                        Berobat
                        </a>
                    </li>
                    <li>
                        <a href="/dokter" class="nav-link {{ $title == 'Data Dokter' ? 'active' : 'text-white' }}">
                        <i class="fas fa-user-md me-3 fs-5"></i>
                        Dokter
                        </a>
                    </li>
                    <li>
                        <a href="/obat" class="nav-link {{ $title == 'Data Obat' ? 'active' : 'text-white' }}">
                        <i class="fas fa-pills me-3 fs-5"></i>
                        Obat
                        </a>
                    </li>
                    <li>
                        <a href="/rs_rujuk" class="nav-link {{ $title == 'Rumah Sakit Rujukan' ? 'active' : 'text-white' }}">
                        <i class="fas fa-hospital me-3 fs-6"></i>
                        Rumah Sakit Rujukan
                        </a>
                    </li>
                </ul>
                <div class="border-top footer text-white">
                    <div class="container my-3">
                        &copy; Copyright 2022 - DAC Medical Center
                    </div>
                </div>
            </div>
              
            
            <div class="b-example-divider b-example-vr"></div>
            
            <div style="width: 100vw; background-color: #edf0f7;">
                <nav class="navbar navbar-expand-lg bg-light box shadow px-4">
                    <div class="container-fluid">
                        <span class="fw-bold">{{ $title }}</span>
                        {{-- <a href="/login" class="btn btn-primary ms-auto">Login</a> --}}
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>Admin</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                {{-- @include('components.message') --}}
            
                @yield('main-content')
            </div>
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
