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
    <link rel="stylesheet" href="{{URL::to('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/css/owl.theme.default.min.css')}}">
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
                    <img alt="logo"
                        src="https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/zeus/production/e5b8438b.svg">
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
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
                crossorigin="anonymous">
            </script>


        </div>

        <div class="container-fluid bg-light">
            <div class="bg-light mb-3">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="justify-content-end">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Young Living</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Iphone 11 Ibox</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Smart Watch</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Samsung S21</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Xiaomi Mi 10</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Apple Watch Series 6</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-theme mt-3">
                <div class="item">
                    <img class="img img-fluid"
                        src="https://ecs7-p.tokopedia.net/img/cache/1208/NsjrJu/2021/2/5/651046d7-d4a6-4f72-b879-250951557b93.jpg.webp"
                        alt="">
                </div>
                <div class="item">
                    <img class="img img-fluid"
                        src="https://ecs7-p.tokopedia.net/img/cache/1208/NsjrJu/2021/2/5/c0c5b631-384a-43ce-9c15-22faee1e8b0c.jpg.webp"
                        alt="">
                </div>
                <div class="item">
                    <img class="img img-fluid"
                        src="https://ecs7-p.tokopedia.net/img/cache/1208/NsjrJu/2021/2/5/89cd0c04-019d-4de0-8dcf-3cf398feb2e6.jpg"
                        alt="">
                </div>
            </div>

            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-category">
                                <h2>
                                    Kategori Pilihan
                                </h2>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="card">
                                        <img src="https://ecs7-p.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_e5b3e074-c897-4cf0-9ced-5572d0538e7c.jpg"
                                            alt="category"></div>
                                </div>
                                <div class="item">
                                    <div class="card">
                                        <img src="https://ecs7-p.tokopedia.net/img/cache/200-square/attachment/2018/8/11/3127195/3127195_2883bb63-8f91-4c9c-a423-d68b22e51b78.jpg.webp"
                                            alt="category"></div>
                                </div>
                                <div class="item">
                                    <div class="card">
                                        <img src="https://ecs7-p.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_d7c67b76-9ff4-46f9-93a3-ec4be4918439.jpg"
                                            alt="category"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-category">
                                <h2>
                                    Top Up & Tagihan
                                </h2>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="card">
                                        <img src="https://ecs7-p.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_e5b3e074-c897-4cf0-9ced-5572d0538e7c.jpg"
                                            alt="category"></div>
                                </div>
                                <div class="item">
                                    <div class="card">
                                        <img src="https://ecs7-p.tokopedia.net/img/cache/200-square/attachment/2018/8/11/3127195/3127195_2883bb63-8f91-4c9c-a423-d68b22e51b78.jpg.webp"
                                            alt="category"></div>
                                </div>
                                <div class="item">
                                    <div class="card">
                                        <img src="https://ecs7-p.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_d7c67b76-9ff4-46f9-93a3-ec4be4918439.jpg"
                                            alt="category"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


            <div class="container-fluid bg-light">
            <div class="bg-light">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="justify-content-end">
                            <div>
                                <ul class="nav justify-content-end">
                                <div>
                                    <li class="nav-item">
                                    <a href="#">
                                    <img class="img-icon" height="30px" src="https://ecs7-p.tokopedia.net/img/cache/100-square/iEWsxH/2020/8/25/0a133911-788c-4041-afc7-ed0844fd1cf0.png.webp" 
                                        alt="icon-Kategori" title="">
                                    </li>
                                </div>
                                    <p>Kategori</p>
                                    </a>
                                <div>
                                <li class="nav-item">
                                    <a href="#">
                                    <img class="img-icon" height="30px" src="https://ecs7-p.tokopedia.net/img/cache/100-square/attachment/2019/4/26/3127195/3127195_965ca072-7a2d-4991-b572-928d5c95e644.png.webp" 
                                        alt="icon-Kategori" title="">
                                    </li>
                                </div>
                                    <p>Semua Promo</p>
                                    </a>
                                <div>
                                <li class="nav-item">
                                    <a href="#">
                                    <img class="img-icon" height="30px" src="https://ecs7-p.tokopedia.net/img/cache/100-square/attachment/2020/7/2/85531617/85531617_d81fe23b-74ab-41c8-972f-2262a15b1c90.png.webp" 
                                        alt="icon-Kategori" title="">
                                    </li>
                                </div>
                                    <p>Kesehatan</p>
                                    </a>
                                <div>
                                <li class="nav-item">
                                    <a href="#">
                                    <img class="img-icon" height="30px" src="https://ecs7-p.tokopedia.net/img/cache/100-square/attachment/2019/6/24/20723472/20723472_bf50c288-713e-456d-86e1-607d8c58cbee.png.webp" 
                                        alt="icon-Kategori" title="">
                                    </li>
                                </div>
                                    <p>Makanan & Minuman</p>
                                    </a>
                                <div>
                                <li class="nav-item">
                                    <a href="#">
                                    <img class="img-icon" height="30px" src="https://ecs7-p.tokopedia.net/img/cache/100-square/attachment/2019/4/2/3127195/3127195_63153161-ab6c-4b5d-862c-7286bcf7f189.png.webp" 
                                        alt="icon-Kategori" title="">
                                    </li>
                                </div>
                                    <p>Dapur</p>
                                    </a>
                                <div>
                                <li class="nav-item">
                                    <a href="#">
                                    <img class="img-icon" height="30px" src="https://ecs7-p.tokopedia.net/img/cache/100-square/attachment/2020/7/2/85531617/85531617_d81fe23b-74ab-41c8-972f-2262a15b1c90.png.webp" 
                                        alt="icon-Kategori" title="">
                                    </li>
                                </div>
                                    <p>Emas</p>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <script src="{{URL::to('assets/js/owl.carousel.js')}}"></script>
            <script src="{{URL::to('assets/js/owl.carousel.min.js')}}"></script>

            <script>
                $( '.owl-carousel' ).owlCarousel( {
                    stagePadding: 50,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    loop: true,
                    margin: 20,
                    items: 1,
                    center: true,
                    autoWidth: true,
                    nav: true,
                    smartSpeed: 4500,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 5
                        }
                    }
                } )
            </script>
</body>

</html>