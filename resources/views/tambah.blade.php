{{-- fungsi untuk menggabungkan halaman ini ke halaman ujian.blade.php --}}
@extends('ujian')
{{-- fungsi untuk menampilkan judul halaman di tab --}}
@section('title', 'Tambah Data')
{{-- fungsi untuk menampilkan judul halaman --}}
@section('judul', 'Tambah Data')
{{-- fungsi untuk menampilkan isi halaman --}}
@section('isi')
<div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <a href="/ujian" class="btn btn-secondary">Balik</a>
        <br />
        <br />
        <form method="post" action="/ujian/store">

            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="nama_mk" class="form-control" placeholder="Nama Matkul" autofocus
                    value="{{old('nama_mk')}}">

                @if($errors->has('nama_mk'))
                <div class="text-danger">
                    {{ $errors->first('nama_mk')}}
                </div>
                @endif

            </div>
            <br>
            <div class="form-group">
                <input type="text" name="dosen" class="form-control" placeholder="Dosen" autofocus
                    value="{{old('dosen')}}">

                @if($errors->has('dosen'))
                <div class="text-danger">
                    {{ $errors->first('dosen')}}
                </div>
                @endif

            </div>
            <br>
            <div class="form-group">
                <input type="number" name="jumlah_soal" class="form-control" placeholder="Jumlah Soal" autofocus
                    value="{{old('jumlah_soal')}}">

                @if($errors->has('jumlah_soal'))
                <div class="text-danger">
                    {{ $errors->first('jumlah_soal')}}
                </div>
                @endif

            </div>
            <br>
            <div class="form-group">
                <textarea name="keterangan" class="form-control" placeholder="Keterangan"
                    autofocus>{{old('keterangan')}}</textarea>

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
