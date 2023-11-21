<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- Include SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

    <style>
        #header.header-scrolled {
            background: #fff;
            padding: 20px 0;
            height: 72px;
            transition: all 0.5s;
        }

        #header {
            padding: 30px 0;
            height: 92px;
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            transition: all 0.5s;
            z-index: 997;
            background-color: #fff;
            box-shadow: 5px 0px 15px #c3c3c3;
        }

        #header #logo h1 {
            font-size: 34px;
            margin: 0;
            padding: 0;
            line-height: 1;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            letter-spacing: 3px;
        }

        #header #logo h1 a,
        #header #logo h1 a:hover {
            color: #000;
            padding-left: 10px;
            border-left: 4px solid grey;
        }

        #nav-menu-container {
            float: right;
            margin: 0;
        }

        .nav-menu>li {
            margin-left: 10px;
        }

        .nav-menu>li {
            float: left;
        }

        .nav-menu li {
            position: relative;
            white-space: nowrap;
        }

        .nav-menu,
        .nav-menu * {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .header-scrolled .nav-menu li:hover>a,
        .header-scrolled .nav-menu>.menu-active>a {
            color: #18d26e;
        }

        .header-scrolled .nav-menu a {
            color: black;
        }

        .nav-menu li:hover>a,
        .nav-menu>.menu-active>a {
            color: #18d26e;
        }

        .nav-menu a {
            padding: 0 8px 10px 8px;
            text-decoration: none;
            display: inline-block;
            color: #000;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            outline: none;
        }

        #mobile-nav-toggle {
            display: inline;
        }

        #mobile-nav-toggle {
            position: fixed;
            right: 0;
            top: 0;
            z-index: 999;
            margin: 20px 20px 0 0;
            border: 0;
            background: none;
            font-size: 24px;
            display: none;
            transition: all 0.4s;
            outline: none;
            cursor: pointer;
        }

        #mobile-body-overly {
            width: 100%;
            height: 100%;
            z-index: 997;
            top: 0;
            left: 0;
            position: fixed;
            background: rgba(0, 0, 0, 0.7);
            display: none;
        }

        body.mobile-nav-active #mobile-nav {
            left: 0;
        }

        #mobile-nav {
            position: fixed;
            top: 0;
            padding-top: 18px;
            bottom: 0;
            z-index: 998;
            background: rgba(0, 0, 0, 0.8);
            left: -260px;
            width: 260px;
            overflow-y: auto;
            transition: 0.4s;
        }

        #mobile-nav ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        #mobile-nav ul li {
            position: relative;
        }

        #mobile-nav ul li a {
            color: #fff;
            font-size: 13px;
            text-transform: uppercase;
            overflow: hidden;
            padding: 10px 22px 10px 15px;
            position: relative;
            text-decoration: none;
            width: 100%;
            display: block;
            outline: none;
            font-weight: 700;
            font-family: "Montserrat", sans-serif;
        }

        #mobile-nav ul .menu-has-children i.fa-chevron-up {
            color: #18d26e;
        }

        #mobile-nav ul .menu-has-children i {
            position: absolute;
            right: 0;
            z-index: 99;
            padding: 15px;
            cursor: pointer;
            color: #fff;
        }

        #mobile-nav ul .menu-item-active {
            color: #18d26e;
        }

        #mobile-nav ul li li {
            padding-left: 30px;
        }

        .menu-has-children ul {
            display: none;
        }

        .sf-arrows .sf-with-ul {
            padding-right: 30px;
        }

        .sf-arrows .sf-with-ul:after {
            content: "\f107";
            position: absolute;
            right: 15px;
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
            color: black;
        }

        .sf-arrows ul .sf-with-ul:after {
            content: "\f105";
        }


        .nav-menu li:hover>ul,
        .nav-menu li.sfHover>ul {
            display: block;
        }

        .nav-menu ul {
            margin: 4px 0 0 0;
            padding: 10px;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
            background: #fff;
        }

        .nav-menu ul {
            position: absolute;
            display: none;
            top: 100%;
            left: 0;
            z-index: 99;
        }

        .sf-arrows .sf-with-ul {
            padding-right: 30px;
        }

        .nav-menu li {
            position: relative;
            white-space: nowrap;
        }


        @media (max-width: 768px) {
            #nav-menu-container {
                display: none;
            }

            #mobile-nav-toggle {
                display: inline;
            }
        }
    </style>

</head>

<header id="header">
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <div id="logo" class="pull-left">
                    <h1 class="scrollto">
                        <img src="https://i.ibb.co/6Zm5FSq/tiketku.png" alt="" width="150px;">
                    </h1>
                    
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
                </div>
            </div>
            <div class="col-lg-9">
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Login</a></li>
                        <li><a href="">Register</a></li>
        
                        <li class="menu-has-children"><a href="">Drop Down</a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li><a href="#">Drop Down 2</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="">Drop Down</a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li><a href="#">Drop Down 2</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="">Contact</a></li> -->
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </div>
</header><!-- #header -->


<div class="container mt-5">
    <body style="margin-top: 80px;}">
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row mb-md-2">
                <!-- looping disini -->
                @foreach ($data as $datas)
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm border-light mb-4">
                            <a href="#" class="position-relative">
                                <img src="{{ $datas['gambar'] }}" class="card-img-top" alt="image"> </a>
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="font-weight-normal">{{ $datas['event'] }}</h5>
                                </a>
                                <div class="post-meta"><span class="small lh-120"><i
                                            class="fas fa-map-marker-alt mr-2"></i>{{ $datas['lokasi'] . ' ' . $datas['tanggal'] . ' ' . $datas['jam'] }}</span>
                                </div>
                                <br>
                                <div class="row">
                                    <!-- Harga di sebelah kiri -->
                                    <div class="col-md-6">
                                        <p class="text-left">
                                            <b>Rp: {{ $datas['harga'] }}</b>
                                        </p>
                                    </div>

                                    <!-- Tombol BELI di sebelah kanan -->
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary float-right" data-toggle="modal"
                                            data-target="#beliModal{{ $datas['id'] }}">
                                            Beli
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="beliModal{{ $datas['id'] }}" tabindex="-1"
                                            role="dialog" aria-labelledby="beliModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="beliModalLabel">Buy ticket
                                                            {{ $datas['event'] }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('checkout.checkout') }}" method="post">
                                                            @csrf

                                                            @php
                                                                $random = Str::random(10);
                                                            @endphp

                                                            <input type="text" name="trx" class="form-control" value="TR_{{$random}}" hidden>


                                                            <label>Nama</label>
                                                            <input type="text" name="nama" class="form-control">

                                                            <label>Email</label>
                                                            <input type="text" name="email" class="form-control">

                                                            <input type="text" name="kode_event"
                                                                value="{{ $datas['kode_event'] }}" hidden>

                                                            <input type="text" name="event"
                                                                value="{{ $datas['event'] }}" hidden>

                                                            <input type="text" name="tanggal"
                                                                value="{{ $datas['tanggal'] }}" hidden>

                                                            <input type="text" name="jam"
                                                                value="{{ $datas['jam'] }}" hidden>

                                                            <input type="text" name="lokasi"
                                                                value="{{ $datas['lokasi'] }}" hidden>

                                                            <input type="text" name="harga"
                                                                value="{{ $datas['harga'] }}" hidden>

                                                            <input type="text" name="payment" value="sukses"
                                                                hidden>

                                                            <input type="text" name="notif" class="form-control" value="belum" hidden>

                                                            <input type="text" name="scan" class="form-control" value="belum" hidden>

                                                            <div class="alert alert-primary mt-3"> Sesuaikan field yang
                                                                di butuhkan </div>
                                                            <div class="alert alert-primary mt-3"> Payment di anggap
                                                                success edit lagi saja supaya support payment </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="sumbit"
                                                            class="btn btn-primary">Checkout</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- end looping -->
            </div>
        </div>
    </section>
</body>
</div>



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<!-- Include SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if (session('sukses'))
    <script>
        swal.fire({
            title: 'Sukses!',
            text: '{{ session('sukses') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    </script>
@elseif (session('gagal'))
    <script>
        swal.fire({
            title: 'Gagal!',
            text: '{{ session('gagal') }}',
            icon: 'error',
            confirmButtonText: 'OK'
        })
    </script>
@endif
