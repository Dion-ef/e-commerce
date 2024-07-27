<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Dashboard/Toko Junior</title>
</head>
<body class="bg-secondary">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand">MCC Comp</a>
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

<div class="pe-xl-3 pt-xl-4">
    <div class="container">
        <h3>Dashboard</h3>
        <div class="card">
            <div class="card-header">
               <h5>Selamat Datang di Toko Kami</h5>
            </div>
        </div>
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