<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('aset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>@yield('title') | CRUD Data Ujian</title>
</head>

<body>
    <div class="container">
         fd
        <br>
        <br>
        {{-- menampilkan judul halaman web --}}
        <h3 class="mb-4">@yield('judul')</h3>
        {{-- menampilkan isi halaman web --}}
        @yield('isi')
        <br>
        <br>
    </div>
    <script src="{{ asset('aset/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
