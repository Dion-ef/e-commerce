<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Login</title>
</head>
<body class="bg-secondary bg-gradient pt-xl-5">
    <div class="container py-5">
        <div class="w-25  center border rounded px-3 py-3 mx-auto bg-light">
            <h1>Login</h1>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/user/validasi" method="POST">
                @csrf <!--menyiapkan untuk inputan hidden isinya token-->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control"></input>
                </div class="mb-3">
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control"></input>
                </div>
                <div class="mb-3 py-3">
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>