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

    <title>Home</title>
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
              <a class="nav-link active" aria-current="page" href="{{ route ('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route ('about') }}">About</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route ('announce') }}">Announcements</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route ('contact') }}">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>

    <!--carousel 2nd-->
    <div class="box1">
      <div id="carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset ('storage/img/imagenew/anonce1.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset ('storage/img/imagenew/anonce2.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset ('storage/img/imagenew/anonce3.jpg')}}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev buton" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next buton" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      </div>
    </div>
    <br>

    <!--*Content-->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-6 col-md-6 col-xs">
            <a href="">
              <img src="{{asset ('storage/img/imgbg/meh1.jpg')}}" class="img-fluid" alt="...">
            </a>
            
          </div>
          <div class="col-6  col-md-6 col-xs">
            <a href="">
              <img src="{{asset ('storage/img/imgbg/meh2.jpg')}}" class="img-fluid" alt="...">
            </a>
          </div>
          <div class="col-3  col-xs">
            <a href="">
              <img src="{{asset ('storage/img/imgbg/meh3.jpg')}}" class="img-fluid" alt="...">
            </a>
          </div>
          <div class="col-3  col-xs">
            <a href="">
              <img src="{{asset ('storage/img/imgbg/meh1.jpg')}}" class="img-fluid" alt="...">
            </a>
          </div>
          <div class="col-6 col-sm-6 px-5 sampledate col-xs">
            <p class="texthis">Febuary 20 2023</p>
            <a href="#">
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam fuga dolorum magnam iusto quaerat. Asperiores perferendis quod voluptates rerum quae id officia earum. Aliquid amet nobis minus nemo mollitia!</p>
            </a>
            <p class="texthis">December 12 2020</p>
            <a href="#">
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam fuga dolorum magnam iusto quaerat. Asperiores perferendis quod voluptates rerum quae id officia earum. Aliquid amet nobis minus nemo mollitia!</p>
            </a>
            <p class="texthis">March 03 2021</p>
            <a href="#">
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla numquam fuga dolorum magnam iusto quaerat. Asperiores perferendis quod voluptates rerum quae id officia earum. Aliquid amet nobis minus nemo mollitia!</p>
            </a>
            <div class="buton">
              <a href="#viewall" >View all</a>
            </div>
        </div>
      </div>
    </section>
    <br>
    <!-- *viewmore -->
    <section id="viewmore">
      <h3 class="text-center widget">Sample</h3>
      <div class="container-fluid">
        <div class="row">
          <div class="col-6 col-xs-12 col-md-6 col-sm-12">
            <div class="cardall">
              <img src="{{ asset('storage/img/imagenew/anonce2.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempore deserunt labore, tempora recusandae sunt beatae, nesciunt numquam adipisci magni modi rerum et at dolores iste. Sint, et doloribus? Iure?</p>
                </a>
              </div>
            </div>
          </div>

          <div class="col-6 col-xs-12 col-md-6 col-sm-12">
            <div class="cardall">
              <img src="{{ asset('storage/img/imagenew/anonce3.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempore deserunt labore, tempora recusandae sunt beatae, nesciunt numquam adipisci magni modi rerum et at dolores iste. Sint, et doloribus? Iure?</p>
                </a>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-6 col-sm-12">
            <div class="cardall">
              <img src="{{ asset('storage/img/imagenew/anonce1.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempore deserunt labore, tempora recusandae sunt beatae, nesciunt numquam adipisci magni modi rerum et at dolores iste. Sint, et doloribus? Iure?</p>
                </a>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-6 col-sm-12">
            <div class="cardall">
              <img src="{{ asset('storage/img/imagenew/anonce3.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempore deserunt labore, tempora recusandae sunt beatae, nesciunt numquam adipisci magni modi rerum et at dolores iste. Sint, et doloribus? Iure?</p>
                </a>
              </div>
            </div>
          </div>

          <div class="col-6 col-xs-12 col-md-6 col-sm-12">
            <div class="cardall" >
              <img src="{{ asset('storage/img/imagenew/anonce2.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempore deserunt labore, tempora recusandae sunt beatae, nesciunt numquam adipisci magni modi rerum et at dolores iste. Sint, et doloribus? Iure?</p>
                </a>
              </div>
            </div>
          </div>

          <div class="col-6 col-xs-12 col-md-6 col-sm-12">
            <div class="cardall" >
              <img src="{{ asset('storage/img/imagenew/anonce1.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempore deserunt labore, tempora recusandae sunt beatae, nesciunt numquam adipisci magni modi rerum et at dolores iste. Sint, et doloribus? Iure?</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <!-- ^viewall -->
    <section id="viewall"> 
      <h3 class="text-center widget">Sample</h3>
      <div class="container-fluid">
        <div class="row">

          <div class="col-12 p-3">
            <h6 class="text-danger">Dec 25 2002</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis fugit corporis assumenda non fuga optio, possimus, veniam facere ratione inventore mollitia numquam tempore officiis ab architecto quos harum quod repudiandae?</p>
            <a href="" class="text-muted">Read more</a>
          </div>

          <div class="col-12 p-3">
            <h6 class="text-danger">Dec 25 2002</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis fugit corporis assumenda non fuga optio, possimus, veniam facere ratione inventore mollitia numquam tempore officiis ab architecto quos harum quod repudiandae?</p>
            <a href="" class="text-muted">Read more</a>
          </div>

          <div class="col-12 p-3">
            <h6 class="text-danger">Dec 25 2002</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis fugit corporis assumenda non fuga optio, possimus, veniam facere ratione inventore mollitia numquam tempore officiis ab architecto quos harum quod repudiandae?</p>
            <a href="" class="text-muted">Read more</a>
          </div>

          <div class="col-12 p-3">
            <h6 class="text-danger">Dec 25 2002</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis fugit corporis assumenda non fuga optio, possimus, veniam facere ratione inventore mollitia numquam tempore officiis ab architecto quos harum quod repudiandae?</p>
            <a href="" class="text-muted">Read more</a>
          </div>

          <div class="col-12 p-3">
            <h6 class="text-danger">Dec 25 2002</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis fugit corporis assumenda non fuga optio, possimus, veniam facere ratione inventore mollitia numquam tempore officiis ab architecto quos harum quod repudiandae?</p>
            <a href="" class="text-muted">Read more</a>
          </div>

          <div class="col-12 p-3">
            <h6 class="text-danger">Dec 25 2002</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis fugit corporis assumenda non fuga optio, possimus, veniam facere ratione inventore mollitia numquam tempore officiis ab architecto quos harum quod repudiandae?</p>
            <a href="" class="text-muted">Read more</a>
          </div>

          <div class="col-12 p-3">
            <h6 class="text-danger">Dec 25 2002</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis fugit corporis assumenda non fuga optio, possimus, veniam facere ratione inventore mollitia numquam tempore officiis ab architecto quos harum quod repudiandae?</p>
            <a href="" class="text-muted">Read more</a>
          </div>

          <div class="col-12 p-3">
            <h6 class="text-danger">Dec 25 2002</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis fugit corporis assumenda non fuga optio, possimus, veniam facere ratione inventore mollitia numquam tempore officiis ab architecto quos harum quod repudiandae?</p>
            <a href="" class="text-muted">Read more</a>
          </div>
        </div>
      </div>
    </section>
    <br>

    <!-- ?video-->
      <div class="container-fluid" id="vid">
        <div class="row">
          <div class="col-6 col-sm-12 vid">
            <iframe  src="https://www.youtube.com/embed/dVYl5ImNjow" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    

    <!-- ~FOOTER-->
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

      <hr class="my-3" />

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