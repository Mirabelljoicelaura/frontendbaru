<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
      .navbar {
        background-color: blue;
        font-family: 'Poppins', sans-serif;
        position : sticky;
      }

      .navbar-brand,
      .navbar-nav .nav-link {
        color: white;
      }
      .navbar-brand:hover{
        color:white;
        text-decoration : none;

      }

      .navbar-nav .nav-link:hover {
        color: #83764F;
        text-decoration : underline;
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


    </style>
  </head>
  <body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg position sticky --bs-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Tanjung Anom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto" style="padding: 0 10px;">
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000" >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="logo">
              <img src="https://i.pinimg.com/originals/11/81/23/1181237c6315660d6efa26e84d0fbfe2.png"  alt="Logo" class="logo-img">
          </div>
          <img src="https://images.unsplash.com/photo-1613395940640-9c2d79562bf7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="..." style="height:600px; object-fit: cover;">
        </div>
        <div class="carousel-item">
          <div class="logo">
              <img src="https://i.pinimg.com/originals/11/81/23/1181237c6315660d6efa26e84d0fbfe2.png"  alt="Logo" class="logo-img">
          </div>
        <img src="https://images.unsplash.com/photo-1545300082-ad9323e5e4ee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" class="d-block w-100" alt="..."  style="height:600px; object-fit: cover;">
        </div>
        <div class="carousel-item">
          <div class="logo">
              <img src="https://i.pinimg.com/originals/11/81/23/1181237c6315660d6efa26e84d0fbfe2.png"  alt="Logo" class="logo-img">
          </div>
        <img src="https://images.unsplash.com/photo-1582156307922-c6cd3584b6bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="..."  style="height:600px; object-fit: cover;">
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
    
    <!-- ormas -->
    <h1>Organisasi Masyarakat</h1>
    <!-- <div class="row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div> -->

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>