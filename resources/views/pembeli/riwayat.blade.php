<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Transaksi</title>
</head>
<body class="bg-secondary">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand">Toko Junior</a>
      <button class="navbar-toggler" type="button" >
          <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard/pembeli">Beranda <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/profil/pembeli">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/riwayat">Riwayat Pembelian</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/user">Keluar</a>
      </li>
    </ul>
    </div>
</nav>

<div class=" container my-5 p-3 col-md-12">
  <div class="card">
    <div class="card-body">
      <h3>Riwayat Pembelian</h3>
      <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-2">Tanggal</th>
            <th class="col-md-2">Nama Pembeli</th>
            <th class="col-md-1">Alamat</th>
            <th class="col-md-2">Total</th>
           
      
            
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $item->tanggal}}</td>
            <td>{{ $item->users_name}}</td>
            <td>{{ $item->alamat}}</td>
            <td>Rp. {{ number_format($item->harga)}}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
  </div>
</div>
<footer>
    <div class="text-center p-4 my-xl-5">
    © 2023 Copyright:
    <a class="text-reset fw-bold">Toko Junior</a>
  </div>
  
</footer>
@include('sweetalert::alert')