@extends('layout.main')

@section('content')
    <section class="relative">
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="logo">
                        <img src="https://i.pinimg.com/originals/11/81/23/1181237c6315660d6efa26e84d0fbfe2.png" alt="Logo"
                            class="logo-img">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
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
    </div>
@endsection
