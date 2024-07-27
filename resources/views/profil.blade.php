<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Profil</title>
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
    

    @foreach($data as $m)
    <form action="/profil/update" method="POST">
      @csrf
      <section class="vh-100" style="background-color: #f4f5f7;">

    <div class="row d-flex justify-content-center align-items-center h-100 bg-secondary">
      <div class="col col-lg-6 mb-3 mb-lg-5  ">
        <div class="card mb-4 border" >
          <div class="row g-0 ">
            <div class="col-md-4 gradient-custom text-center text-white bg-warning"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="/gambar/gambar1.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 100px;" />
                <h5>{{$m->name}}</h5>
                <h6>{{$m->level}}</h6>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Profil Admin</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Nama</h6>
                    <input class="text-muted" name="name" value="{{$m->name}}"></input>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <input class="text-muted" name="email" value="{{$m->email}}"></input>
                  </div> 
                  <div class="col-6 mb-3">
                    <h6>Alamat</h6>
                    <input class="text-muted" name="alamat" value="{{$m->alamat}}"></input>
                  </div>
                   <div class="col-6 mb-3">
                    <h6>No Hp</h6>
                    <input class="text-muted" name="no" value="{{$m->no}}"></input>
                  </div>  

                </div>
                  <div class="form-group">
                    <label for="nama" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">UBAH</button></div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endforeach
 

    <div class="text-center p-4 my-xl-5">
    © 2023 Copyright:
    <a class="text-reset fw-bold">Toko Junior</a>
  </div>
</footer>
</body>
</html>