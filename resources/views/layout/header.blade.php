<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Manajemen Data Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container">
        <h1>Manajemen Data Buku</h1>
        @if (Auth::check())
        <p>anda login sebagai: <strong>{{ Auth::user()->name }}</strong></p>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="tombol">logout</button>
        </form>
        @endif
        <div class="nav">
            <ul>
                <li><a href="/kategori">Kategori</a></li>
                <li><a href="/penerbit">Pnererbit</a></li>
                <li><a href="/buku">Buku</a></li>
            </ul>
        </div>
