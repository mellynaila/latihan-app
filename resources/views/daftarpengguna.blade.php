<!DOCTYPE html>
<html>

<head>
    <title>Data Pengguna</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f6f1f1;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("{{ asset('images/bg.jpg') }}") no-repeat center;
            background-size: cover;
            z-index: -1;
        }

        .main-box {
            max-width: 700px;
            margin: 20px auto;
        }
    </style>
</head>

<body>

    <div class="main-box">

        <h2 class="mb-3 text-center text-white">Data Pengguna</h2>

        <!-- FORM TAMBAH -->
        <div class="card mb-4">
            <div class="card-header bg-danger text-white">Tambah Data</div>
            <div class="card-body">

                <form action="{{ route('pengguna.store') }}" method="POST">
                    @csrf

                    <input type="text" name="email" class="form-control mb-2" placeholder="Email">
                    <input type="password" name="password" class="form-control mb-2" placeholder="Password">

                    <button class="btn btn-warning">Simpan</button>
                </form>

            </div>
        </div>

        <!-- TABEL -->
        <div class="card">
            <div class="card-header bg-danger text-white">Daftar Pengguna</div>

            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead class="table-danger">
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Password</th>


                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id_pengguna }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>

                            <td>

                                <!-- BUTTON EDIT -->
                                <button class="btn btn-warning btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $item->id_pengguna }}">
                                    Edit
                                </button>

                                <!-- HAPUS -->
                                <form action="{{ route('pengguna.destroy', $item->id_pengguna) }}"
                                    method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus?')">
                                        Hapus
                                    </button>
                                </form>

                            </td>
                        </tr>

                        <!-- MODAL EDIT -->
                        <div class="modal fade" id="editModal{{ $item->id_pengguna }}" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <form action="{{ route('pengguna.update', $item->id_pengguna) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="modal-header bg-danger">
                                            <h5>Edit Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <div class="modal-body">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{ $item->email }}" class="form-control">

                                            <label class="mt-2">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak diubah">
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn btn-success">Update</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>