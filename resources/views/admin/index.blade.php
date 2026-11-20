<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">{{ $judul }}</h4>
                <a href="/admin/create" class="btn btn-light btn-sm fw-semibold">+ Tambah Admin</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th width="12%">ID Admin</th>
                                <th>Username</th>
                                <th width="22%" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($admins as $row)
                                <tr>
                                    <td>{{ $row->id_admin }}</td>
                                    <td>{{ $row->username }}</td>
                                    <td class="text-center">
                                        <a href="/admin/edit/{{ $row->id_admin }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="/admin/{{ $row->id_admin }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data admin ini?')">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-4">Belum ada data admin.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>