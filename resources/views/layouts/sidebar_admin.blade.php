

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .bg-dark {
            background-color: #343a40 !important;
        }

        .min-vh-100 {
            min-height: 100vh;
        }

        .sidebar {
            overflow-y: auto;
            transition: all 0.3s ease-in-out;
        }

        .nav-link {
            color: #adb5bd;
            font-size: 16px;
            width: 100%;
            display: block;
            text-align: left;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            border-radius: 5px;
            width: 100%;

        }

        .nav-link.active {
            background-color: #495057;
            color: #ffffff;
            font-weight: bold;
            border-radius: 5px;
            width: 100%;

            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .nav-item {
    width: 100%;
}
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }

            .nav-link span {
                display: none;
            }

            .nav-link i {
                margin-right: 0;
            }
        }
    </style>



<div class="container-fluid">
    <div class="row flex-nowrap">

        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark sidebar">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 px-2 mb-md-0 me-md-auto text-white text-decoration-none">
                    <i class="bi bi-list fs-3"></i>
                    <span class="fs-5 d-none d-sm-inline ms-2">Menu</span>
                </a>
                <ul class="nav nav-pills mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ route('admin.profile') }}"
                           class="nav-link text-white align-middle mb-2 px-2  {{ request()->routeIs('admin.profile') ? 'active' : '' }} ">
                            <i class="bi bi-person fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.index.jadwal') }}"
                           class="nav-link text-white align-middle mb-2 px-2 {{ request()->routeIs('admin.index.jadwal') ? 'active' : '' }}">
                            <i class="bi bi-table fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Jadwal</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.relawan.index') }}"
                           class="nav-link text-white align-middle mb-2 px-2 {{ request()->routeIs('admin.relawan.index') ? 'active' : '' }}">
                            <i class="bi bi-people fs-4"></i>
                            <span class="ms-1 d-none d-sm-inline">Relawan</span>
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>

        <div class="col py-4">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
