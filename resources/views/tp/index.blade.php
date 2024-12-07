<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Daftar Pegawai</h2>
        <a href="{{ route('tp.create') }}" class="btn btn-primary mb-3">Tambah Teori Pendahuluan</a>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Sub Judul</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Posted At</th>
                            <th>Deadline At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teori_pendahuluans as $teori_pendahuluan)
                        <tr>
                            <td>{{ $teori_pendahuluan->judul }}</td>
                            <td>{{ $teori_pendahuluan->sub_judul }}</td>
                            <td>{{ $teori_pendahuluan->kategori }}</td>
                            <td>{{ $teori_pendahuluan->deskripsi }}</td>
                            <td>{{ $teori_pendahuluan->posted_at }}</td>
                            <td>{{ $teori_pendahuluan->deadline_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
