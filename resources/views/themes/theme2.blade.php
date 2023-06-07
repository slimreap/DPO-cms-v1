<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" > --}}
    <link rel="stylesheet" href="{{asset('css/theme2.css')}}">
    <!-- *Icon logo title-->
    <link rel="icon" href="{{asset('storage/images/theme2-images/iconDPO.png')}}" type="image/icon type">
    <!-- *Fontawesome-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Home</title>
  </head>
  <body>
    <div class="container-fluid px-auto">
      <header>
        <div class="logo">
          <div class="conlogo">
            <a href="home1.html" class="awmsu">
              <img src="{{asset('storage/images/theme2-images/wmsufinal1.png')}}" alt="logo" >
            </a>
            <div class="logo-text">
              <p>Data Protection Office</p>
              <br>
              <p>Western Mindanao State University</p>
            </div>
          </div>
        </div>
        <nav>
          <ul id="menu-list">
            <li><a href="home1.html" class="active">Create</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Privacy Policies</a></li>
            <li><a href="#">Advisory</a></li>
          </ul>
        </nav>
        <img src="{{asset('storage/images/theme2-images/menu.png')}}" alt="menu" class="menu-icon" onclick="togglemenu()">
      </header>
      <main>
        <div class="wrapper">
          <div class="cont" id="content">
            <h1>Create with imagination</h1>
            <p>Hola!, I'm a web developer and I'm here to help you with your projects</p>
            <button type="button">Create Now <img src="/images/arrow.png" alt="arrow"></button>
          </div>
          <div class="cont" id="gif">
            <img src="{{asset('storage/images/theme2-images/giphy.gif')}}" alt="gif">
          </div>
        </div>
      </main>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <section id="blog">
            <!--? Box1-->
            <div class="blog-box" id="box1">
              <!--? Image-->
              <div class="blog-img">
                <img src="{{asset('storage/images/theme2-images/article/artic1.jpeg')}}" alt="blog1">
              </div>
              <!--? Text-->
              <div class="blog-text">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</span>
                <a href="#" class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. consequuntur nemo fuga saepe officia.</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit praesentium nostrum vel, voluptas commodi, eius saepe officiis asperiores ipsum nesciunt voluptatem quisquam vero magnam, id ipsa corrupti porro reiciendis quibusdam!</p>
                <a href="#">Read More</a>
              </div>
            </div>

            <!--? Box1-->
            <div class="blog-box" id="box2">
              <!--? Image-->
              <div class="blog-img">
                <img src="{{asset('storage/images/theme2-images/article/artic2.jpeg')}}" alt="blog1">
              </div>
              <!--? Text-->
              <div class="blog-text">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</span>
                <a href="#" class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. consequuntur nemo fuga saepe officia.</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit praesentium nostrum vel, voluptas commodi, eius saepe officiis asperiores ipsum nesciunt voluptatem quisquam vero magnam, id ipsa corrupti porro reiciendis quibusdam!</p>
                <a href="#">Read More</a>
              </div>
            </div>
          
            <!--? Box1-->
            <div class="blog-box" id="box3">
              <!--? Image-->
              <div class="blog-img">
                <img src="{{asset('storage/images/theme2-images/article/artic3.jpeg')}}" alt="blog1">
              </div>
              <!--? Text-->
              <div class="blog-text">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</span>
                <a href="#" class="blog-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. consequuntur nemo fuga saepe officia.</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit praesentium nostrum vel, voluptas commodi, eius saepe officiis asperiores ipsum nesciunt voluptatem quisquam vero magnam, id ipsa corrupti porro reiciendis quibusdam!</p>
                <a href="#">Read More</a>
              </div>
            </div>
      </section>
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <h4>company</h4>
              <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#">our services</a></li>
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">affiliate program</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>get help</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">daily</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">jobs</a></li>
              </ul>
            </div>
            
            <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="/js/script1.js"></script> 
  </body>
</html>