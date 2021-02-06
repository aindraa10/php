<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::to('assets/css/style.css')}}">

    <title>Toko Kita</title>
</head>

<body>
    <div class="container-fluid bg-light">
        <div class="bg-light mb-2">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="justify-content-start">
                        <p class="text-dark pl-3">Download App</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="justify-content-end">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mitra Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Promo</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid ">
    <div class="row">
        <div class="col-lg-2">
            <div class="d-flex justify-content-center">
                <img alt="logo" src="https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/zeus/production/e5b8438b.svg">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="d-flex">
                <p>Kategori</p>
                <div class="w-100 pl-3">
                    {{ Form::open(array('url' => '/search')) }}
                    {{ Form::text('search','',array('class' => 'form-control')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        <div class="col-lg-2">
            <button type="submit" class="btn btn-outline-success">Masuk</button>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
        </script>


</div>
</body>

</html>