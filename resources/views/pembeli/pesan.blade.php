<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Pesan/Toko Junior</title>
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



<div class="container  pt-xl-4 my-3 p-5">
  <div class="row ">
    <div class="col-md-12">
        <a href="/dashboard/pembeli" class="btn btn-primary">Kembali</a>
    </div>
    
    <div class="col-md-12 mt-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('gambar/'.$data->gambar) }}" width="400" class="rounded mx-outo d-block" >
                    </div>
                    <div class="col-md-6 mt-5">
                        <h4>{{$data->nama}}</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td class="text-danger fw-bold">Rp. {{number_format($data->harga)}}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td>{{($data->deskripsi)}}</td>
                                </tr>
                               
                                <tr>
                                    <td>Masukkan Jumlah Pesanan</td>
                                    <td>:</td>
                                    <td>
                                        <form action="/pesanan/{{$data->id}}" method="POST">
                                        @csrf
                                            <input type="text" name="pesan" class="form-control" required="">
                                            <button type="submit" class="btn btn-primary mt-2">Pesan</button>
                                        </form>
                                    </td>
                                </tr>
                                
                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  </div>
</div>

<footer>
    <div class="text-center p-4 my-xl-5">
    © 2023 Copyright:
    <a class="text-reset fw-bold">Toko Junior</a>
  </div>
</footer>


</body>
</html>