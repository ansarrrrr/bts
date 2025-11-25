<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimBTS</title>

    <!-- AdminLTE 3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('/dashboard') }}" class="nav-link font-weight-bold text-primary">SimBTS</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- User -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-user-circle"></i> {{ Session::get('session_no_hp') }}
                    <!-- <i class="fas fa-user-circle"></i> Administrator -->
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ url('/utility/profil') }}" class="dropdown-item">
                        <i class="fas fa-id-badge mr-2"></i> Profil
                    </a>
                    <a href="{{ url('/logout') }}" class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ url('/dashboard') }}" class="brand-link">
            <i class="fas fa-broadcast-tower ml-3 mr-2"></i>
            <span class="brand-text font-weight-light">SimBTS</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                    <!-- Home -->
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>

                    <!-- Data -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                                Data
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('/data-bts') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daftar BTS</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Referensi -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-folder-open"></i>
                            <p>
                                Referensi
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('/kabupaten') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kabupaten</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/kecamatan') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kecamatan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/desa') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Desa</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Utility -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tools"></i>
                            <p>
                                Utility
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('/utility/profil') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Profil</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/utility/pengguna') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manajemen Pengguna</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/utility/log') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Log Akses</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/logout') }}" class="nav-link text-danger">
                                <!-- <a href="{{ url('/utility/logout') }}" class="nav-link text-danger"> -->
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Keluar</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <section class="content p-4">
            @yield('content')
        </section>
    </div>

    <!-- Footer -->
    <footer class="main-footer text-center">
        <strong>© 2025 SimBTS</strong> - Sistem Informasi Base Transceiver Station
    </footer>

</div>
</body>
</html>