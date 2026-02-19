<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Data Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1>Manajemen Data Buku</h1>
        @if (Auth::check())
        <div style="text-align: center; margin-bottom:10px;" >
            <p style="margin-bottom:10px;">anda login sebagai: <strong>{{ Auth::user()->name }}</strong></p>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="tombol">logout</button>
            </form>
        </div>
        @endif
        <div class="nav">
            <ul>
                <li><a href="/kategori">Kategori</a></li>
                <li><a href="/penerbit">Penerbit</a></li>
                <li><a href="/buku">Buku</a></li>
            </ul>
        </div>
