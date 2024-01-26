<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pelajaran</title>
    <link rel="icon" type="image/png" sizes="32x32" href="https://yt3.googleusercontent.com/ReuxUblXnAhK02GUQyyryy3Qn9uwnvloquNYfEciJ7-J9bnmuaKE0N1OjLtdUQgyo6tp52BFXQ=s176-c-k-c0x00ffffff-no-rj">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">
    {{-- Alert --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
  text-align:center;
}
 th,td {
    background-color: #9dc183;
    color: #000000; /* Atur warna teks menjadi putih */
    
}



/* Style the sidebar - fixed full height */
.sidebar {
  height: 100%;
  width: 300px; /* Adjust the width as needed */
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

/* Style sidebar links */
.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

/* Style links on mouse-over */
.sidebar a:hover {
  color: #f1f1f1;
}

/* Style the main content */
.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

/* Add media queries for small screens (when the height of the screen is less than 450px, add a smaller padding and font-size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

        body {
            background: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #9dc183;
            color: #ffffff !important;
        }

        .navbar-brand {
            font-weight: bold;
            text-align: center;
            width: 100%;
            font-size: 24px;
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .navbar-nav .nav-item .nav-link {
            color: #ffffff !important;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #ffffff;
            background-color: #6c757d;
        }

        .sidebar {
            background-color: #343a40;
            color: #ffffff;
            padding: 15px;
            height: 100vh;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            margin-bottom: 15px;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        .container {
            margin-top: 20px;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th,
.table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #dee2e6;
}

.table th {
    background-color: #9dc183;
    color: #ffffff; /* Atur warna teks menjadi putih */
}

.table tbody tr {
    transition: background-color 0.3s;
}

.table tbody tr:hover {
    background-color: #f8f9fa;
}

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
            bottom: .5em;
        }

    </style>
</head>

<body style="background: lightgray">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
             <i class="fas fa-book mr-2"></i>
            DATA PELAJARAN SLB MELATI
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Tautan Logout dipindahkan ke sidebar -->
        </div>
    </nav>

    <div class="row">
    <nav class="col-md-2 d-none d-md-block sidebar" style="background-color: #343a40; color: #ffffff; height: 100vh; overflow-y: auto;">
    <div class="sidebar">
        <!-- Tambahkan style untuk membuat sidebar memanjang -->
        <ul class="nav flex-column">
            <li class="nav-item">
                        
                        </li>
                        @if(auth()->user()->role !== 'guru')
                <div class="text-white p-3 mb-2 text-center">
                    <h3 class="text-white font-weight-bold">Admin</h3>
                </div>

            <li class="nav-item">

                        <a class="nav-link" href="{{ route('guru1.index') }}">
                            <div class="border rounded bg-dark text-white p-2 mb-2">
                                <i class="fas fa-database"></i> Data Guru SLB Melati
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('siswa.index') }}">
                            <div class="border rounded bg-dark text-white p-2 mb-2">
                                <i class="fas fa-database"></i> Data Siswa SLB Melati
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('data_pelajaran.index') }}">
                            <div class="border rounded bg-dark text-white p-2 mb-2">
                                <i class="fas fa-book"></i> Data Pelajaran
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <div class="border rounded bg-dark text-white p-2 mb-2">
                            <i class="fas fa-user"></i> Kelola Users
                            </div>
                        </a>
                    </li>
@elseif(auth()->user()->role=('guru'))
<div class="text-white p-3 mb-2 text-center">
                    <h3 class="text-white font-weight-bold">Guru</h3>
                </div>
<li class="nav-item">
                        <a class="nav-link" href="{{ route('siswa.index') }}">
                            <div class="border rounded bg-dark text-white p-2 mb-2">
                                <i class="fas fa-database"></i> Data Siswa SLB Melati
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('data_pelajaran.index') }}">
                            <div class="border rounded bg-dark text-white p-2 mb-2">
                                <i class="fas fa-book"></i> Data Pelajaran
                            </div>
                        </a>
                    </li>
@endif

                    <!-- Tambahkan tautan Logout di sini -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">
                            <div class="border rounded bg-dark text-white p-2 mb-2">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="container mt-5">
            <div class="row">
                    <div class="col-md-12">
                        
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <!-- Tambahkan pesan selamat datang yang estetik -->
                                @if(auth()->user()->role !== 'guru')
                                <div class="alert alert-info text-center" style="background-color: #9dc183; color: #ffffff;">
    <h1 style="color: white;">Selamat Datang Admin!</h1>
    <p style="color: white;">Anda dapat mengelola data siswa, guru, dan data pelajaran dengan mudah di sini.</p>
</div>
                                @else
                                    <div class="alert alert-info text-center" style="background-color: #9dc183; color: #ffffff;">
                                    <h1 style="color: white;">Selamat Datang Guru!</h1>
                                        <p>Anda dapat melihat dan mengelola data siswa dan data pelajaran dengan mudah di sini.</p>
                                    </div>
                                @endif
                                <a href="{{ route('data_pelajaran.create') }}" class="btn btn-md btn-info mb-3" style="background-color: #006e90; color: white;">
    <i class="fas fa-plus"></i> TAMBAH DATA PELAJARAN
</a>

<table id="dataTable" class="display text-primary" style="min-width: 845px">
<thead>
    <tr>
        <th scope="col" style="color: white;">Nama Pelajaran</th>
        <th scope="col" style="color: white;">Kelas Ajaran</th>
        <th scope="col" style="color: white;">Pengajar</th>
        <th scope="col" style="color: white;">Periode Ajaran</th>
        <th scope="col" style="color: white;">Aksi</th>
    </tr>
</thead>
                                    <tbody>
                                        @forelse ($data as $data_pelajaran)
                                        <tr>
                                            <td>{{ $data_pelajaran->nama_pelajaran }}</td>
                                            <td>{{ $data_pelajaran->kelas_ajaran }}</td>
                                            <td>{{ $data_pelajaran->pengajar }}</td>
                                            <td>{{ $data_pelajaran->periode_ajaran }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('data_pelajaran.destroy', $data_pelajaran->id) }}" method="post">
                                                    <a href="{{ route('data_pelajaran.edit', $data_pelajaran->id) }}" class="btn btn-sm btn-primary">
                                                        <i class="fas fa-edit"></i> EDIT
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i> HAPUS
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                
                                            </td>
                                        </tr>
                                        <div class="alert alert-danger">
                                                    Data pelajaran belum Tersedia!
                                                </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./js/quixnav-init.js"></script>
<script src="./js/custom.min.js"></script>

<!-- Vectormap -->
<script src="./vendor/raphael/raphael.min.js"></script>
<script src="./vendor/morris/morris.min.js"></script>


<script src="./vendor/circle-progress/circle-progress.min.js"></script>
<script src="./vendor/chart.js/Chart.bundle.min.js"></script>

<script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

<!--  flot-chart js -->
<script src="./vendor/flot/jquery.flot.js"></script>
<script src="./vendor/flot/jquery.flot.resize.js"></script>

<!-- Owl Carousel -->
<script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

<!-- Counter Up -->
<script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
<script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
<script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Datatable -->
<script src="./js/datatables-demo.js"></script>
<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="./js/plugins-init/datatables.init.js"></script>

<!-- Chart Chartist plugin files -->
<script src="./vendor/chartist/js/chartist.min.js"></script>
<script src="./vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
<script src="./js/plugins-init/chartist-init.js"></script>
<script src="./js/dashboard/dashboard-1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.1/axios.min.js"></script>

{{-- Alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        //message with toastr
        @if(session()-> has('success'))
        toastr.success('{{ session('success ') }}', 'BERHASIL!');
        @elseif(session()-> has('error'))
        toastr.error('{{ session('error ') }}', 'GAGAL!');
        @endif
    </script>
</body>
</html>
