<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD Data Ujian</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>CRUD Data Ujian</h3>
                </div>
                <div class="card-body">
                    <a href="/ujian/tambah" class="btn btn-primary">Tambah</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Matkul</th>
                                <th>Dosen</th>
                                <th>Jumlah Soal</th>
                                <th>Keterangan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ujian as $u)
                            <tr>
                                <td>{{ $u->nama_mk }}</td>
                                <td>{{ $u->dosen}}</td>
                                <td>{{ $u->jumlah_soal}}</td>
                                <td>{{ $u->keterangan}}</td>
                                <td>
                                    <a href="/ujian/edit/{{ $u->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/ujian/hapus/{{ $u->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>