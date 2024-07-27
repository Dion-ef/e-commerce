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


<form class="container pt-xl-4" action="/barang/update" method="POST">

@csrf
<div class="my-3 p-3 bg-body rounded shadow-sm">
<h1 class="text-center">Edit Barang</h1><br/>
<input type="hidden" name="id" value="{{ $data->id }}"><br />
  <div class="form-group">
    <label class="fw-bold" for="nama">Nama Barang</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}"><br />
  </div>
  <div class="form-group">
    <label class="fw-bold" for="kategori">Kategori</label>
    <select class="form-control" id="kategori" name="kategori" >
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div><br />
  <div class="form-group">
    <label class="fw-bold" for="harga">Harga</label>
    <input type="text" class="form-control" id="harga" name="harga" value="{{$data->harga}}"><br />
  </div><br />
  <div class="form-group">
    <label class="fw-bold" for="gambar">Pilih Gambar</label>
    <input type="file" class="form-control-file" id="gambar" name="gambar" >
  </div><br />
  <div class="form-group">
    <label class="fw-bold" for="detail">Detail Barang</label>
    <textarea class="form-control" id="detail" name="detail" rows="3">{{$data->deskripsi}}</textarea>
    </div>
    <div class="form-group">
    <label for="nama" class="col-sm-2 col-form-label"></label>
     <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
    <div class="form-group">
    <label for="nama" class="col-sm-2 col-form-label"></label>
     <div class="col-sm-10"><a href="/kategori/barang" class="btn btn-primary">Kembali</a></div>
    </div>
    
  </div>
</form>


<footer>
    <div class="text-center p-4 my-xl-5">
    © 2023 Copyright:
    <a class="text-reset fw-bold">Toko Junior</a>
  </div>
</footer>