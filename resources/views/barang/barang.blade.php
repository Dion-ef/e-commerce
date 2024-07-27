<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body class="bg-secondary">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">Toko Junior</a>
        <button class="navbar-toggler" type="button" >
            <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard">Dashboard <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dashboard/profil">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kategori/barang">Data Barang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/dashboard/kategori">Kategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/transaksi">Transaksi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/user">Keluar</a>
      </li>
    </ul>
</nav>

<div class=" container my-5 p-3 bg-body rounded shadow-sm">
<div class="pb-2">
  <a href="/barang/tambah" class="btn btn-primary">+Tambah Barang</a>
</div>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-2">Nama barang</th>
            <th class="col-md-1">Kategori</th>
            <th class="col-md-1">Harga</th>
            <th class="col-md-2">Detail</th>
            <th class="col-md-2">Gambar</th>
            <th class="col-md-1">Aksi</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $item->nama}}</td>
            <td>{{ $item->kategori->nama_kategori}}</td>
            <td>Rp.{{ $item->harga}}</td>
            <td>{{ $item->deskripsi}}</td>
            <td>@if ($item->gambar)<img src="{{ asset('gambar/'.$item->gambar) }}" height="100">@endif</td>
            <td>
              <a href="/barang/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
              <a href="/barang/hapus/{{ $item->id }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<footer>
    <div class="text-center p-4 my-xl-5">
    © 2023 Copyright:
    <a class="text-reset fw-bold">Toko Junior</a>
  </div>
  @include('sweetalert::alert')
</footer>