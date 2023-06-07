<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ^Bootystrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('css/main.css') }}">
    <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Announcement</title>
  </head>
  <body class="all">
    <!-- *NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-sm-top" style="background-color: #990000;">
      <div class="container-fluid ">
        <a class="navbar-brand" href="#"><img src="{{ asset ('storage/img/logo.png') }}" alt="dpo wmsu" width="250" height="50" class="d-inline-block align-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto text-center">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route ('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('about') }}">About</a>
            </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route ('announce') }}">Announcements</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('contact') }}">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <!-- ^CAROUSEL-->
    <div id="carousel1" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner" id="carousel_item1">
        <div class="carousel-item active">
          <img src="{{ asset ('storage/img/imagenew/anonce1.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset ('storage/img/imagenew/anonce2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset ('storage/img/imagenew/anonce3.jpg') }}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" style="background-color: #990000;" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" style="background-color: #990000;" type="button" data-bs-target="#carousel1" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- ?SECTION FOR CONTENT-->
    <div class="blog-section">
      <div class="section-content blog">
        <div class="title">
          <h2>Blogs & News</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde omnis dolor excepturi mollitia officia expedita, minima blanditiis reiciendis quia corporis soluta voluptas necessitatibus. Enim, amet alias numquam dicta fugit ut?</p>
        </div>
        <div class="cards">
          <div class="cardthis">
            <div class="image-section">
              <img src="{{ asset ('storage/img/anonimg/ok2.jpg') }}" alt="">
            </div>
            <div class="article">
              <h3>Article Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            </div>
            <div class="blog-view">
              <a href="" class="button">Read more</a>
            </div>
            <div class="posted-date">
              <p>Posted on Jan 14 2023</p>
            </div>
          </div>

          <div class="cardthis">
            <div class="image-section">
              <img src="{{ asset ('storage/img/anonimg/ok3.jpg') }}" alt="">
            </div>
            <div class="article">
              <h3>Article Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            </div>
            <div class="blog-view">
              <a href="" class="button">Read more</a>
            </div>
            <div class="posted-date">
              <p>Posted on Jan 14 2023</p>
            </div>
          </div>

          <div class="cardthis">
            <div class="image-section">
              <img src="{{ asset ('storage/img/anonimg/ok2.jpg') }}" alt="">
            </div>
            <div class="article">
              <h3>Article Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            </div>
            <div class="blog-view">
              <a href="" class="button">Read more</a>
            </div>
            <div class="posted-date">
              <p>Posted on Jan 14 2023</p>
            </div>
          </div>

          <div class="cardthis">
            <div class="image-section">
              <img src="{{ asset ('storage/img/anonimg/ok3.jpg') }}" alt="">
            </div>
            <div class="article">
              <h3>Article Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            </div>
            <div class="blog-view">
              <a href="" class="button">Read more</a>
            </div>
            <div class="posted-date">
              <p>Posted on Jan 14 2023</p>
            </div>
          </div>

          <div class="cardthis">
            <div class="image-section">
              <img src="{{ asset ('storage/img/anonimg/ok2.jpg') }}" alt="">
            </div>
            <div class="article">
              <h3>Article Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            </div>
            <div class="blog-view">
              <a href="" class="button">Read more</a>
            </div>
            <div class="posted-date">
              <p>Posted on Jan 14 2023</p>
            </div>
          </div>

          <div class="cardthis">
            <div class="image-section">
              <img src="{{ asset ('storage/img/anonimg/ok3.jpg') }}" alt="">
            </div>
            <div class="article">
              <h3>Article Title</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            </div>
            <div class="blog-view">
              <a href="" class="button">Read more</a>
            </div>
            <div class="posted-date">
              <p>Posted on Jan 14 2023</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <!-- *SECTION For Announcment-->
    <div class="content text-center border p-3" style="background-color: #4E6C50;">
      <h2 class="title">Announcement</h2>
      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col coltext">
            <ul class="fs-5 text-decoration-none">
              <li>
                <a href="">Process for the Printing of Identification Card</a>
                <br>
                <a href="">Survey Questionnaire for Employers of WMSU Graduates 2012-2016</a>
                <br>
                <a href="">Public Bidding Noctice 2021</a>
              </li>
            </ul>
          </div>
          <div class="col">
            <ul class="fs-5  text-decoration-none ">
              <li>
                <a href="">Nomination Form for Private Sector Representatives</a>
                <br>
                <a href="">Proclamation No. 922</a>
                <br>
                <a href="">GSAT and LSAT Application Form</a>
                <br>
                <a href="">One of three columns</a>
              </li>
            </ul>
          </div>
          <div class="col">
            <ul class="fs-5" >
              <li>
                <a href="">Public Bidding Noctice 2021</a>
                <br>
                <a href="">Requirements for Private Sector Representatives</a>
                <br>
                <a href="">WMSU CET Announcement</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <!-- ~FOOTER-->
    <footer class="text-center text-white" style="background-color: #9c1a1a">
    <!-- !Grid container -->
    <div class="container">
      <section class="mt-5">
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <p class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Downloadables</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <p class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Archives</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <p class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Career Opportunity</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <p class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <p class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">MyeClass</a>
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-2" />

      <!-- Section: Social -->
      <section class="text-center" id="footer">
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </section>
      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- ^Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)" id="copyright">
      WMSU Copyright © 2016. All Rights Reserved. 
    </div>
    
      
    </div>
    <!-- Copyright -->
  </footer>
    <!-- Footer -->
  </body>
</html>