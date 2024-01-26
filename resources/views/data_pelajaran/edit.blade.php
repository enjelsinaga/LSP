<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Pelajaran - Data Guru SLB Melati</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body style="background: lightgray">
    <!-- Navbar Data Guru SLB Melati -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #9dc183;">
        <a class="navbar-brand" href="#">
            <i class="fas fa-book mr-2"></i> DATA PELAJARAN
        </a>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h2 class="text-center mb-4">
                            <i class="fas fa-edit mr-2"></i> Edit Data Pelajaran
                        </h2>
                        <form action="{{ route('data_pelajaran.update', $data->id) }}" method="post">

                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label><strong>Nama Pelajaran</strong></label>
                                <input type="varchar" class="form-control" name="nama_pelajaran" value="{{ $data->nama_pelajaran }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Kelas Ajaran</strong></label>
                                <input type="varchar" class="form-control" name="kelas_ajaran" value="{{ $data->kelas_ajaran }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Pengajar</strong></label>
                                <input type="varchar" class="form-control" name="pengajar" value="{{ $data->pengajar }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Lama Ajaran</strong></label>
                                <input type="varchar" class="form-control" name="periode_ajaran" value="{{ $data->periode_ajaran }}" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save mr-2"></i> Update
                                </button>
                                <a href="{{ route('data_pelajaran.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left mr-2"></i> Batal
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
