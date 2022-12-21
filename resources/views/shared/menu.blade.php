<header>
    <nav class="navbar navbar-expand-lg bg-light box shadow px-4">
        <div class="container-fluid">
            <button class="btn btn-secondary shadow navbar-brand text-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="d-flex">
                <span class="d-block fw-bold">Hello, Rian Basari!</span>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">DAC Medical Center</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="d-grid gap-2">
                <a href="/" class="{{ $title == 'Home' ? 'menu-active bg-opacity-25 rounded-3 fw-bold' : '' }} menu p-2 px-3 mx-3 my-1">
                    <i class="fas fa-tachometer-alt-fast me-3 fs-5"></i> 
                    Dashboard
                </a>
            </div>
            <div class="d-grid gap-2">
                <a href="/pasien" class="{{ $title == 'Data Pasien' ? 'menu-active bg-opacity-25 rounded-3 fw-bold' : '' }} menu p-2 px-3 mx-3 my-1">
                    <i class="fas fa-user-injured me-3 fs-5"></i>
                    Pasien
                </a>
            </div>
            <div class="d-grid gap-2">
                <a href="/berobat" class="{{ $title == 'Data Berobat' ? 'menu-active bg-opacity-25 rounded-3 fw-bold' : '' }} menu p-2 px-3 mx-3 my-1">
                    <i class="fas fa-procedures me-3 fs-6"></i>
                    Berobat
                </a>
            </div>
            <div class="d-grid gap-2">
                <a href="/dokter" class="{{ $title == 'Data Dokter' ? 'menu-active bg-opacity-25 rounded-3 fw-bold' : '' }} menu p-2 px-3 mx-3 my-1">
                    <i class="fas fa-user-md me-3 fs-5"></i>
                    Dokter
                </a>
            </div>
            <div class="d-grid gap-2">
                <a href="/obat" class="{{ $title == 'Data Obat' ? 'menu-active bg-opacity-25 rounded-3 fw-bold' : '' }} menu p-2 px-3 mx-3 my-1">
                    <i class="fas fa-pills me-3 fs-5"></i>
                    Obat
                </a>
            </div>
            <div class="d-grid gap-2">
                <a href="/rs_rujuk" class="{{ $title == 'Data Rumah Sakit Rujukan' ? 'menu-active bg-opacity-25 rounded-3 fw-bold' : '' }} menu p-2 px-3 mx-3 my-1">
                    <i class="fas fa-hospital me-3 fs-6"></i>
                    RS Rujukan
                </a>
            </div>
            <div class="d-grid gap-2 position-absolute bottom-0 mb-3">
                <a href="/logout" class="menu p-2 px-3 mx-3 my-1">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </div>
        </div>
    </div>

    {{-- <nav class="navbar navbar-expand-lg bg-light box shadow px-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Klinik DAC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Home' ? 'active border-bottom border-primary border-2' : '' }}"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Data Pasien' ? 'active border-bottom border-primary border-2' : '' }}"
                            href="/pasien">Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Data Berobat' ? 'active border-bottom border-primary border-2' : '' }}"
                            href="/berobat">Berobat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Data Dokter' ? 'active border-bottom border-primary border-2' : '' }}"
                            href="/dokter">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Data Obat' ? 'active border-bottom border-primary border-2' : '' }}"
                            href="/obat">Obat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title == 'Rumah Sakit Rujukan' ? 'active border-bottom border-primary border-2' : '' }}"
                            href="/rs_rujuk">RS Rujukan</a>
                    </li>
                </ul>
            </div>
            <a class="btn btn-outline-dark" href="#">Logout</a>
        </div>
    </nav> --}}
</header>


