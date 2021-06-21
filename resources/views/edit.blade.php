{{-- fungsi untuk menggabungkan halaman ini ke halaman ujian.blade.php --}}
@extends('ujian')
{{-- fungsi untuk menampilkan judul halaman di tab--}}
@section('title', 'Edit Data')
{{-- fungsi untuk menampilkan judul halaman --}}
@section('judul', 'Edit Data')
{{-- fungsi untuk menampilkan isi halaman --}}
@section('isi')
<a href="/ujian" class="btn btn-secondary">Balik</a>
<br />
<br />
<div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <form method="post" action="/ujian/update/{{ $ujian->id }}">

            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label>Nama Matkul</label>
                <input type="text" name="nama_mk" class="form-control" value=" {{ $ujian->nama_mk }}">

                @if($errors->has('nama_mk'))
                <div class="text-danger">
                    {{ $errors->first('nama_mk')}}
                </div>
                @endif

            </div>
            <br>
            <div class="form-group">
                <label>Dosen</label>
                <input type="text" name="dosen" class="form-control" value=" {{ $ujian->dosen }}">

                @if($errors->has('dosen'))
                <div class="text-danger">
                    {{ $errors->first('dosen')}}
                </div>
                @endif

            </div>
            <br>
            <div class="form-group">
                <label>Jumlah Soal</label>
                <input type="text" name="jumlah_soal" class="form-control" value=" {{ $ujian->jumlah_soal }}">

                @if($errors->has('jumlah_soal'))
                <div class="text-danger">
                    {{ $errors->first('jumlah_soal')}}
                </div>
                @endif

            </div>
            <br>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control"> {{ $ujian->keterangan }} </textarea>

                @if($errors->has('keterangan'))
                <div class="text-danger">
                    {{ $errors->first('keterangan')}}
                </div>
                @endif

            </div>
            <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary text-center">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
