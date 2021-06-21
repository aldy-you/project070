{{-- fungsi untuk menggabungkan halaman ini ke halaman ujian.blade.php --}}
@extends('ujian')
{{-- fungsi untuk menampilkan judul halaman di tab --}}
@section('title', 'Tampil Data')
{{-- fungsi untuk menampilkan judul halaman --}}
@section('judul', 'Tampil Data')
{{-- fungsi untuk menampilkan isi halaman --}}
@section('isi')
<div class="row">
    <div class="col-md-9">
        <a href="/ujian/tambah" class="btn btn-primary mt-5">Tambah</a>
    </div>
    <div class="col-md-3 mt-2">
        <table>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>Muhammad Aldi Zarkhasy</td>
            </tr>
            <tr>
                <th>Nim</th>
                <th>:</th>
                <td>1710510070</td>
            </tr>
            <tr>
                <th>Prodi</th>
                <th>:</th>
                <td>S1 Ilmu Komputer</td>
            </tr>
        </table>
    </div>
</div>
<br />
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Matkul</th>
                <th>Dosen</th>
                <th>Jumlah Soal</th>
                <th>Keterangan</th>
                <th style="width: 146px;">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ujian as $no => $u)
            <tr>
                <td>{{ ++$no }}</td>
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
@endsection
