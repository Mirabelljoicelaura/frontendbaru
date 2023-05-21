<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&display=swap" rel="stylesheet">
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
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
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

        #custom-text-link{
        font-size: 11pt;
      }

      #module {
        font-size: 1rem;
        line-height: 1.5;
      }

      .card img{
        max-height: 500;
      }

      .read-more, .read-less{
        color:#485ae4;
        cursor: pointer;
        font-weight: 400;
        text-transform: lowercase;
        font-size: 12pt;
      }

      .read-less:hover, .read-more:hover{
        text-decoration: underline;
      }

      .btn-more{
        width: 200px;
        padding: 5px;
        border: none;
        background: #485ae4;
        color: white;
        height: 40px;
        border-radius: 30px;
        font-size: 13pt;
        margin-bottom: 0px;
      }

      .btn-more:hover{
        text-decoration: underline;
        background-color: blue
      }

      .blue-title{
        color: #485ae4;
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
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-4">

                    <div class=" h-50 overflow-hidden">
                        <img class="img-fluid"
                            src="https://i.pinimg.com/564x/ca/f8/0b/caf80b4d3115be8505a29834d594ea69.jpg ">
                    </div>


                    <!-- <div class="col-6 text-end">
                        <img class="img-fluid  w-75"
                        src="https://i.pinimg.com/564x/ca/f8/0b/caf80b4d3115be8505a29834d594ea69.jpg " alt="" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid  w-100"  src="https://i.pinimg.com/564x/ca/f8/0b/caf80b4d3115be8505a29834d594ea69.jpg ">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-50"  src="https://i.pinimg.com/564x/ca/f8/0b/caf80b4d3115be8505a29834d594ea69.jpg ">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid  w-75"  src="https://i.pinimg.com/564x/ca/f8/0b/caf80b4d3115be8505a29834d594ea69.jpg ">
                    </div> -->

                </div>
                <div class="col-lg-8">
                    <h1 class="mb-4">SAMBUTAN <span class="text-primary text-uppercase">KETUA RW.</span></h1>
                    <p class="mb-4">With millions of hectares of fertile land on 17,000 islands, agriculture is a
                        vital sector in Indonesia, absorbing the country's largest workforce. Data from the Central
                        Statistics Agency for 2020 shows that almost 30% of Indonesian workers, or around 8.23 million
                        people, depend on the agricultural sector for their livelihood. However, the sector faces many
                        problems, including poor supply chain infrastructure and a lack of access to advanced
                        technology. <b></b> is here to solve this problem and to support the government's efforts to be
                        self-sufficient in food in order to welcome the industrial revolution era 5.0</b></p>

                    <p>
                        Great potential, lots of challenges
                        The company currently partners with around 1,500 farmer groups in Indonesia, with a total of
                        more than 10,000 individual farmers. Nyayur has five sourcing hubs in West Java to serve
                        customers in Greater Jakarta and two other hubs in Surabaya and Bali.</p>


                </div>
                <div class="row g-3 pb-4">
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-mobile-screen fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-val="10" id="num">00</h2>
                                <p class="mb-0 fw-bolder">Million</p>
                                <p class="mb-0">User</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-val="80" id="num">00</h2>
                                <br>
                                <p class="mb-0">Staffs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="border rounded p-1">
                            <div class="border rounded text-center p-4">
                                <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                <h2 class="mb-1" data-val="500" id="num">000</h2>
                                <br>
                                <p class="mb-0">Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about end -->



        <!-- ormas -->
        <section class="flex justify-content-center align-content-center my-4 mb-5" id="ormas">
            <h2 class="text-center my-5 blue-title text-capitalize fw-bold">Organisasi Masyarakat</h2>
            <div class="ormas carousel mx-auto" data-bs-ride="carousel" id="carouselControls" style="width:90%">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body">
                        <img src="https://1.bp.blogspot.com/-3HopkQyBdVM/WQTWhSnWfjI/AAAAAAAAB-s/PaO2ZF9RpxUIDHyP_faRbxSh5kyK6FUtQCLcB/s1600/Logo%2BNahdlatul%2BUlama%2B%2528NU%2529%2B-%2BFormat%2BPNG.png" class="potensi-img card-img-top rounded-circle object-fit-cover shadow" alt="..." width="50%" height="200">
                            <div class="card-body mt-2 text-center">
                                <h5 class="card-title text-capitalize">nadhlatul ulama</h5>
                                <!-- <p class="card-text mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body">
                        <img src="https://th.bing.com/th/id/OIP.kA5Kfs1jEspaCRokNVQErwHaHm?pid=ImgDet&w=860&h=883&rs=1" alt="" class="card-img-top rounded-circle object-fit-cover shadow" alt="..." width="50%" height="200">
                        <div class="card-body mt-2 text-center">
                            <h5 class="card-title text-capitalize">pemberdayaan kesejahteraan keluarga</h5>
                            <!-- <p class="card-text mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body">
                        <img src="https://images.unsplash.com/photo-1555126634-323283e090fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="" class="card-img-top rounded-circle object-fit-cover shadow" alt="..." width="50%" height="200">
                        <div class="card-body mt-2 text-center">
                            <h5 class="card-title text-capitalize">pemberdayaan kesejahteraan keluarga</h5>
                            <!-- <p class="card-text mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body">
                        <img src="https://images.unsplash.com/photo-1555126634-323283e090fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="" class="card-img-top rounded-circle object-fit-cover shadow" alt="..." width="50%" height="200">
                        <div class="card-body mt-2 text-center">
                            <h5 class="card-title text-capitalize">pemberdayaan kesejahteraan keluarga</h5>
                            <!-- <p class="card-text mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-body">
                        <img src="https://images.unsplash.com/photo-1555126634-323283e090fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="" class="card-img-top rounded-circle object-fit-cover shadow" alt="..." width="50%" height="200">
                        <div class="card-body mt-2 text-center">
                            <h5 class="card-title text-capitalize">pemberdayaan kesejahteraan keluarga</h5>
                            <!-- <p class="card-text mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                </div>
                <!-- create next or prev button -->
                <button class="carousel-control-prev rounded-2 my-auto" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
                <span class="visually-hidden text-black">Previous</span>
                </button>
                <button class="carousel-control-next rounded-2 my-auto" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                <span class="visually-hidden">Next</span>
                </button>
            </div>

            </section>

    {{-- agenda --}}
    <div class="album py-3" id="agenda">
        <div class="container">
            <div class="p-2 text-center">
                <h2 class="text-center blue-title text-capitalize" id="">Agenda terbaru</h2>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 g-3 m-2">
                <div class="col mb-4">
                    <div class="card shadow-light">
                        <img src="https://media.istockphoto.com/id/1164624416/photo/malaysia-hawker-culture-clay-pot-chicken-rice-stock-photo.jpg?b=1&s=170667a&w=0&k=20&c=65L8gxjLg-jpXtSSJVp3wT8c2Z5LL_eMkFTW8DVx9Bk=&auto=format&fit=crop&w=400&h=280&q=80" class="card-img-top object-fit-cover" alt="..." height="200">

                        <div class="card-body">
                          <h5 class="card-title text-capitalize">Takjil Gratis</h5>
                          <p class="card-text thumbnail read-toggle" data-id='0'>Takjil gratis adalah sebuah program yang biasanya diadakan pada bulan Ramadan di mana makanan ringan atau minuman manis seperti kolak, kurma, atau air zam-zam dibagikan secara gratis kepada masyarakat yang sedang berpuasa.</p>
                        </div>
                      </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                      <img src="https://images.unsplash.com/photo-1615647112295-7f6355324a4a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&h=275&q=80" class="card-img-top object-fit-cover" alt="..." width="100%" height="200">
                        <div class="card-body">
                          <h5 class="card-title text-capitalize">Bazar Murah</h5>
                          <p class="card-text thumbnail read-toggle" data-id='0'>Bazar murah sembako adalah sebuah acara di mana berbagai sembako (sembilan bahan pokok) seperti beras, minyak goreng, gula, tepung terigu, dan lain-lain dijual dengan harga yang lebih terjangkau atau murah dari harga pasar.</p>
                        </div>
                      </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1631002165139-81c716532830?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&h=275&q=80" class="card-img-top object-fit-cover" alt="..." width="100%" height="200">
                        <div class="card-body" id="module">
                          <h5 class="card-title text-capitalize">Perayaan Hari Kemerdekaan RI</h5>
                            <p class="card-text thumbnail read-toggle" data-id='0'>Perayaan kemerdekaan RI merupakan acara tahunan yang dirayakan pada tanggal 17 Agustus untuk memperingati kemerdekaan Indonesia. Perayaan ini diisi dengan berbagai kegiatan seperti  pawai, lomba, dan pertunjukan seni budaya.</p>
                        </div>
                      </div>
                </div>
            </div>
            <div class="p-2 text-center">
              <a href="#"><button class="btn-more">Lihat Lagi</button></a>
            </div>
        </div>
    </div>

    {{-- potensi --}}
    <div class="album py-3 pb-5" id="potensi">
        <div class="container">
            <div class="p-5 text-center">
                <h2 class="text-center blue-title">Potensi UMKM</h2>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4 g-4 mx-auto">
                <div class="col">
                    <div class="" style="width: 80%;">
                        <img src="https://images.unsplash.com/photo-1555126634-323283e090fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" class="potensi-img card-img-top rounded-circle object-fit-cover" alt="..." width="200" height="200">
                        <div class="card-body mt-3 text-center">
                          <h5 class="card-title text-capitalize">mie Ayam Pak No</h5>
                          <p class="card-text mb-1">Mie dengan topping ayam dan kuah segar</p>
                          <a href="#" class="text-decoration-none fw-bold" id="custom-text-link">beli sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                            </svg>
                          </a>
                        </div>
                      </div>
                </div>
                <div class="col">
                  <div class="" style="width: 80%;">
                      <img src="https://images.unsplash.com/photo-1567982047351-76b6f93e38ee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="potensi-img card-img-top rounded-circle object-fit-cover" alt="..." width="50%" height="200">
                      <div class="card-body mt-3 text-center">
                        <h5 class="card-title text-capitalize">Pecel Ayam Jaya</h5>
                        <p class="card-text mb-1">Penyetan ayam dengan sambel orek</p>
                        <a href="#" class="text-decoration-none fw-bold" id="custom-text-link">beli sekarang
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                          </svg>
                        </a>
                      </div>
                    </div>
              </div>
              <div class="col">
                <div class="" style="width: 80%;">
                    <img src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80" class="potensi-img card-img-top rounded-circle object-fit-cover" alt="..." width="50%" height="200">
                    <div class="card-body mt-3 text-center">
                      <h5 class="card-title text-capitalize">Cookie Yahuttt</h5>
                      <p class="card-text mb-1">Cookie lejatt dengan cokelat meleleh di dalamnya</p>
                      <a href="#" class="text-decoration-none fw-bold" id="custom-text-link">beli sekarang
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                        </svg>
                      </a>
                    </div>
                  </div>
            </div>
            <div class="col">
              <div class="" style="width: 80%;">
                  <img src="https://images.unsplash.com/photo-1555126634-323283e090fa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" class="potensi-img card-img-top rounded-circle object-fit-cover" alt="..." width="50%" height="200">
                  <div class="card-body mt-3 text-center">
                    <h5 class="card-title text-capitalize">Kui Cakes</h5>
                    <p class="card-text mb-1">Aneka kue kering untuk hari raya eid</p>
                    <a href="#" class="text-decoration-none fw-bold" id="custom-text-link">beli sekarang
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                      </svg>
                    </a>
                  </div>
                </div>
          </div>
            </div>
        </div>
    </div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #45637d;">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Footer text</h5>
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae
                aliquam voluptatem veniam, est atque cumque eum delectus sint!
                </p>
            </div>

            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7902.203939200117!2d112.61045780732552!3d-7.988405393243297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78837616f5f4b7%3A0xc258114edc305fd3!2sBalai%20RW%205%20Kelurahan%20Sukun%20Malang!5e0!3m2!1sid!2sid!4v1683680772912!5m2!1sid!2sid"  width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            </div>


            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>

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

            //read more javascript
            $(document).ready( function () {
            var contentArray=[];
            var index="";
            var clickedIndex="";
            var minimumLength=(parseFloat(getComputedStyle(module).lineHeight))*3;
            var initialContentLength=[];
            var initialContent=[];
            var readMore=" ...<br><br><span class='read-more'><span class='glyphicon glyphicon-plus-sign'></span>Selengkapnya</span>";
            var readLess="<br><br><span class='read-less'><span class='glyphicon glyphicon-minus-sign'></span>Lebih Sedikit</span>";
                $('.read-toggle').each(function(){
                index = $(this).attr('data-id');
                contentArray[index] = $(this).html();
                initialContentLength[index] = $(this).html().length;
                if(initialContentLength[index]>minimumLength) {
                initialContent[index]=$(this).html().substr(0,minimumLength);
                }else {
                initialContent[index]=$(this).html();
                }
                $(this).html(initialContent[index]+readMore);
                //console.log(initialContent[0]);


            });
                $(document).on('click','.read-more',function(){
                $(this).fadeOut(1000, function(){
                clickedIndex = $(this).parents('.read-toggle').attr('data-id');
                $(this).parents('.read-toggle').html(contentArray[clickedIndex]+readLess);
                });
                });
            $(document).on('click','.read-less',function(){
                $(this).fadeOut(1000, function(){
                clickedIndex = $(this).parents('.read-toggle').attr('data-id');
                $(this).parents('.read-toggle').html(initialContent[clickedIndex]+readMore);
                });
                });
            });
        </script>
</body>

</html>
