<!DOCTYPE html>
<html>
<head>
    <title>Add TP - Informatics Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Teori Pendahuluan</h2>

        <div>
            <div>
                <form action="{{ route('tp.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="sub_judul" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" id="sub_judul" name="sub_judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" required>
                    </div>
                    <div class="mb-3">
                        <label for="Deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="Deskripsi" name="Deskripsi" required>
                    </div>
                    <div class="mb-3">
                        <label for="posted_at" class="form-label">Posted At</label>
                        <input type="text" class="form-control" id="posted_at" name="posted_at" required>
                    </div>
                    <div class="mb-3">
                        <label for="deadline_at" class="form-label">Deadline At</label>
                        <input type="text" class="form-control" id="deadline_at" name="deadline_at" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('tp.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
