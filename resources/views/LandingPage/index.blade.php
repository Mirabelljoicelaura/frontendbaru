<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        .navbar {
            background-color: blue;
            font-family: 'Poppins', sans-serif;
            position: sticky;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: white;
        }

        .navbar-brand:hover {
            color: white;
            text-decoration: none;

        }

        .navbar-nav .nav-link:hover {
            color: #83764F;
            text-decoration: underline;
        }

        .logo {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px;
        }

        .logo-img {
            height: 50px;
        }

        /* Start Gallery CSS */
        .thumb {
            margin-bottom: 15px;
        }

        .thumb:last-child {
            margin-bottom: 0;
        }

        .thumb figure img {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            -webkit-transition: .3s ease-in-out;
            transition: .3s ease-in-out;
        }

        .thumb figure:hover img {
            -webkit-filter: grayscale(0);
            filter: grayscale(0);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg position sticky --bs-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Tanjung Anom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto" style="padding: 0 10px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Agenda</a></li>
                            <li><a class="dropdown-item" href="#">Potensi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <section>
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="logo">
                        <img src="https://i.pinimg.com/originals/11/81/23/1181237c6315660d6efa26e84d0fbfe2.png"
                            alt="Logo" class="logo-img">
                    </div>
                    <img src="https://images.unsplash.com/photo-1613395940640-9c2d79562bf7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                        class="d-block w-100" alt="..." style="height:600px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <div class="logo">
                        <img src="https://i.pinimg.com/originals/11/81/23/1181237c6315660d6efa26e84d0fbfe2.png"
                            alt="Logo" class="logo-img">
                    </div>
                    <img src="https://images.unsplash.com/photo-1545300082-ad9323e5e4ee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                        class="d-block w-100" alt="..." style="height:600px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <div class="logo">
                        <img src="https://i.pinimg.com/originals/11/81/23/1181237c6315660d6efa26e84d0fbfe2.png"
                            alt="Logo" class="logo-img">
                    </div>
                    <img src="https://images.unsplash.com/photo-1582156307922-c6cd3584b6bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                        class="d-block w-100" alt="..." style="height:600px; object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- sambutan -->
    <!-- About start -->
        <div class="container-xxl py-5">

            <div class="row g-5 align-items-center">
                <div class="col-lg-4">

                    <div class="">
                        <img class="img-fluid rounded-5"
                            src="https://i.pinimg.com/564x/ca/f8/0b/caf80b4d3115be8505a29834d594ea69.jpg" style="object-fit: cover; object-position: 100% 0; width: 400px; height: 350px;">
                    </div>

                </div>
                <div class="col-lg-8">
                    <h1 class="mb-4">SAMBUTAN <span class="text-primary text-uppercase">KETUA RW.</span></h1>
                    <p class="mb-4"> Assalamualaikum Wr. Wb.</b></p>

                    <p>
                    Kemanusiaan Yang Adil dan Beradab adalah sebaik-baik barometer kita sebagai Warga Negara yang baik dalam memberikan pelayanan dan sebagai wakil pemerintah di tengah-tengah masyarakat, karena kemajuan sebuah lingkungan terutama sosial ekonomi bukan hanya menjadi tanggung jawab perorangan. Melainkan tanggung jawab kita semua. Untuk itu hanya dengan niat dan kemauan yang kuat ditambah doa kita Semua insyaAllah mampu mengubah RW 05 Kelurahan Bandungrejosari, Kota Malang ini menjadi lingkungan yang lebih guyub dan rukun, adil dan beradab sosial dan ekonominya. Lebih merdeka dalam segala hal yang positif. Terima kasih. </p>

                    <p>
                      <span class="badge rounded-pill text-bg-primary">#tonggoKuiseduLurPalingCede'k</span>
                      <span class="badge rounded-pill text-bg-primary">#RW05PeduliLingkungan</span>
                      <span class="badge rounded-pill text-bg-primary">#TanjungAnomJayaLuarBiasa</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row p-3 mb-2 bg-primary text-white">
            <div class="col-sm-3 wow fadeIn" data-wow-delay="0.1s">
                <div class=" p-1">
                    <div class=" text-center p-4">
                        <i class="fa fa-mobile-screen fa-2x text-primary mb-2"></i>
                        <h2 class="mb-1" data-val="10" id="num">00</h2>
                        <p class="mb-0">Laki-laki</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s">
                <div class=" p-1">
                    <div class=" text-center p-4">
                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                        <h2 class="mb-1" data-val="80" id="num">00</h2>
                        <p class="mb-0">Perempuan</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-1">
                    <div class="text-center p-4">
                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                        <h2 class="mb-1" data-val="500" id="num">000</h2>

                        <p class="mb-0">Jiwa</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 wow fadeIn" data-wow-delay="0.5s">
                <div class=" p-1">
                    <div class=" text-center p-4">
                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                        <h2 class="mb-1" data-val="500" id="num">000</h2>
                        <p class="mb-0">Kepala Keluarga</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- about end -->


        <h1>Organisasi Masyarakat</h1>

        <!-- galery start -->
        <section class="container">
            <h1 class="my-4 text-center text-lg-left">Galeri</h1>
            <div class="row gallery">
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <figure><img class="img-fluid img-thumbnail" src="https://picsum.photos/940/650?random=1"
                            alt="Random Image"></figure>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <figure><img class="img-fluid img-thumbnail" src="https://picsum.photos/940/650?random=2"
                            alt="Random Image"></figure>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                    <figure><img class="img-fluid img-thumbnail" src="https://picsum.photos/940/650?random=3"
                            alt="Random Image"></figure>

                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                    <figure><img class="img-fluid img-thumbnail" src="https://picsum.photos/940/650?random=4"
                            alt="Random Image"></figure>

                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                    <figure><img class="img-fluid img-thumbnail" src="https://picsum.photos/940/650?random=5"
                            alt="Random Image"></figure>

                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                    <figure><img class="img-fluid img-thumbnail" src="https://picsum.photos/940/650?random=6"
                            alt="Random Image"></figure>

                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                    <figure><img class="img-fluid img-thumbnail" src="https://picsum.photos/940/650?random=7"
                            alt="Random Image"></figure>

                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb">

                    <figure><img class="img-fluid img-thumbnail" src="https://picsum.photos/940/650?random=8"
                            alt="Random Image"></figure>

                </div>

            </div>
        </section>
        <!-- galery end -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <script>
            let valueDisplays = document.querySelectorAll("#num");
            let interval = 5000;

            valueDisplays.forEach((valueDisplays) => {
                let startValue = 0;
                let endValue = parseInt(valueDisplays.getAttribute("data-val"));
                let duration = Math.floor(interval / endValue);
                let counter = setInterval(function() {
                    startValue += 1;
                    valueDisplays.textContent = startValue;
                    if (startValue == endValue) {
                        clearInterval(counter);
                    }
                }, duration);
            })
        </script>
</body>

</html>
