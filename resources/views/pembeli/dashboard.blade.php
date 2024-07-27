<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Dashboard/Toko Junior</title>
</head>
<body class="">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand">MCC Comp</a>
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

<div class="content">
  <div class="card">
    <div class="card-header">
      <div class="card-tools">
        <form action="/profil/search" class="form-inline " method="GET">
          <input type="search" name="search" class="form-control float-right shadow-lg " placeholder="Cari Berdasarkan Nama">

        </form>
      </div>
    </div>
  </div>
</div><br />

<div class="container pt-xl-4 my-3 p-5 bg-secondary">
  <div class="row justify-content-center">
    @foreach($data as $item)
    <div class=" col-md-3 mt-5">
      <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="{{ asset('gambar/'.$item->gambar) }}" height="180" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$item->nama}}</h5>
        <p class="card-text">
            <strong >Harga : </strong > Rp.{{number_format($item->harga)}} <br />
            <hr>
            <strong>Keterangan :</strong><br />
              {{$item->deskripsi}}
        </p>
        <a href="/pesan/{{$item->id}}" class="btn btn-primary">Pesan Sekarang</a>
    </div>
  </div>
</div>
@endforeach
  </div>
</div>

<footer>
    <div class="text-center p-4 my-xl-5">
    © 2023 Copyright:
    <a class="text-reset fw-bold">MCC Comp</a>
  </div>
</footer>


@include('sweetalert::alert')
</body>
</html>