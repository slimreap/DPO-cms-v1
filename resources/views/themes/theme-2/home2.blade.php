<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- !Bootstrap CSS  JS-->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="bootstrap.bundle.min.js"></script>
    <!-- !Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <!-- !Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Home DPO</title>
  </head>
  <body>
    <!-- ~Navbar -->
    <nav class="navbar bg-body-tertiary fixed-top p-0">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <div class="container-fluid">
            <img src="../src/img/logo.png" alt="logo"  width="250px">
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <img src="../src/img/wmsu.png" alt="wmsulogo" width="100vh" height="70vh" class="d-inline-block align-text-top">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Data Protection Office</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active text-white text-bg-danger text-center" aria-current="page" href="/src/home.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/src/about.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/src/about.html">Mission & Vision</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="/src/about.html">Quality Policy</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="/src/about.html">History</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/src/announce.html">Announcement</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/src/contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ~Content -->
    <div class="container">
      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner" >
          <div class="carousel-item active">
            <img src="../src/img/anonce1.jpg" class="d-block w-100" alt="slide1" height="550px">
          </div>
          <div class="carousel-item">
            <img src="../src/img/anonce2.jpg" class="d-block w-100" alt="slide2" height="550px">
          </div>
          <div class="carousel-item">
            <img src="../src/img/anonce3.jpg" class="d-block w-100" alt="slide3" height="550px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    
    <!-- ~Downloadable links-->
    <div class="container">
      <div class="row">
        <div class="col-sm cardnum1">
          <div class="card">
            <img src="../src/img/anonce1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-sm cardnum1">
          <div class="card">
            <img src="../src/img/anonce2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-sm cardnum1">
          <div class="card">
            <img src="../src/img/anonce3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container" style="margin-top: -20px;">
        <a href="#viewmore" class="text-danger text-decoration-none">View more</a>
      </div>
    </div>

    <!-- ~Accordion -->
    <div class="container pt-5 accord">
      <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Accordion Item #1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Accordion Item #2
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <div class="container" id="viewmore">
      <div class="card">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn" style="background-color: #FFF6C3;">Go somewhere</a>
        </div>
      </div>
      &nbsp;
      <div class="card">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn" style="background-color: #FFF6C3;">Go somewhere</a>
        </div>
      </div>
      &nbsp;
      <div class="card">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn" style="background-color: #FFF6C3;">Go somewhere</a>
        </div>
      </div>
      &nbsp;
      <div class="card">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn" style="background-color: #FFF6C3;">Go somewhere</a>
        </div>
      </div>
      &nbsp;
      <div class="card">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn " style="background-color: #FFF6C3;">Go somewhere</a>
        </div>
      </div>
    </div>
    <br>

    <!-- *Modal trigger button-->
    <div class="container">
      <div class="card-group">
        <div class="card">
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            <img src="../src/img/anonce1.jpg" class="card-img-top" alt="...">
          </button>
        </div>

        <div class="card">
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <img src="../src/img/anonce2.jpg" class="card-img-top" alt="...">
          </button>
        </div>
        
        <div class="card">
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            <img src="../src/img/anonce3.jpg" class="card-img-top" alt="...">
          </button>
        </div>
      </div>

      <!-- *Modal1 -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel1">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="container-fluid">
                <div class="row bg-white">
                  <div class="col-md-12">
                    <div class="card">
                      <img src="../src/img/anonce1.jpg" alt="">
                    </div>
                    
                  </div>
                  <div class="col-md-12 ms-auto">
                    This is some placeholder content to show a vertically centered modal. We've added some extra copy here to show how vertically centering the modal works when combined with scrollable modals. We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non recusandae adipisci quia qui veritatis facilis accusamus, velit, consectetur sit minima unde aliquam obcaecati repellat assumenda mollitia eaque. Deleniti, totam fugiat?
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Download</button>
            </div>
          </div>
        </div>
      </div>

      <!-- *Modal2 -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel2">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="container-fluid">
                <div class="row bg-white">
                  <div class="col-md-12">
                    <div class="card">
                      <img src="../src/img/anonce2.jpg" alt="">
                    </div>
                    
                  </div>
                  <div class="col-md-12 ms-auto">
                    This is some placeholder content to show a vertically centered modal. We've added some extra copy here to show how vertically centering the modal works when combined with scrollable modals. We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non recusandae adipisci quia qui veritatis facilis accusamus, velit, consectetur sit minima unde aliquam obcaecati repellat assumenda mollitia eaque. Deleniti, totam fugiat?
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Download</button>
            </div>
          </div>
        </div>
      </div>

      <!-- *Modal3 -->
      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel3">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="container-fluid">
                <div class="row bg-white">
                  <div class="col-md-12">
                    <div class="card">
                      <img src="../src/img/anonce3.jpg" alt="">
                    </div>
                    
                  </div>
                  <div class="col-md-12 ms-auto">
                    This is some placeholder content to show a vertically centered modal. We've added some extra copy here to show how vertically centering the modal works when combined with scrollable modals. We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non recusandae adipisci quia qui veritatis facilis accusamus, velit, consectetur sit minima unde aliquam obcaecati repellat assumenda mollitia eaque. Deleniti, totam fugiat?
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Download</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- *Video Gallery -->
    <div class="container container-vid">
      <h2>Video Gallery</h2>
      <div class="row row-vid">
        <div class="col col-sm-12 col-md-12 col-lg-6 col-vid">
          <div class="feature-img">
            <img src="/src/img/imgGallery/pex1.jpg" class="img-fluid" width="100%">
            <img src="/src/img/imgGallery/start1.png" class="play-btn" onclick="playVideo4('/src/img/imgGallery/vid5.mp4')">
          </div>
        </div>
        <div class="col col-sm-12 col-md-12 col-lg-6 col-vid">
          <div class="small-img-row">
            <div class="small-img">
              <img src="/src/img/imgGallery/pex2.jpg" class="img-fluid" >
              <img src="/src/img/imgGallery/start1.png" class="play-btn2" onclick="playVideo3()">
              <p>How to add multiple videos in website or<br>to make video gallery</p>
            </div>
          </div>
          <div class="small-img-row">
            <div class="small-img">
              <img src="/src/img/imgGallery/pex3.jpg" class="img-fluid">
              <img src="/src/img/imgGallery/start1.png" class="play-btn2" onclick="playVideo2()">
              <p>How to add multiple videos in website or<br>to make video gallery</p>
            </div>
          </div>
          <div class="small-img-row">
            <div class="small-img">
              <img src="/src/img/imgGallery/pex4.jpg" class="img-fluid">
              <img src="/src/img/imgGallery/start1.png" class="play-btn2" onclick="playVideo()">
              <p>How to add multiple videos in website or<br>to make video gallery</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="video-player" id="videoPlayer">
      <video width="100%" controls autoplay id="myVideo" class="object-fit-xxl-contain border rounded" autoplay>
        <source type="video/mp4" src="/src/img/imgGallery/vid2.mp4">
      </video>
      <img src="/src/img/imgGallery/cancel1.png" class="close-btn" onclick="stopVideo()">   <!-- onclick="stopVideo()" -->
    </div>

    <div class="video-player2" id="videoPlayer2">
      <video width="100%" controls autoplay id="myVideo2" autoplay>
        <source type="video/mp4" src="/src/img/imgGallery/vid3.mp4">
      </video>
      <img src="/src/img/imgGallery/cancel1.png" class="close-btn" onclick="stopVideo2()">   <!-- onclick="stopVideo()" -->
    </div>

    <div class="video-player" id="videoPlayer3">
      <video width="100%" controls autoplay id="myVideo3" autoplay>
        <source type="video/mp4" src="/src/img/imgGallery/vid4.mp4">
      </video>
      <img src="/src/img/imgGallery/cancel1.png" class="close-btn" onclick="stopVideo3()">   <!-- onclick="stopVideo()" -->
    </div>

    <div class="video-player" id="videoPlayer4">
      <video width="100%" controls autoplay id="myVideo4" autoplay>
        <source type="video/mp4" src="/src/img/imgGallery/vid5.mp4">
      </video>
      <img src="/src/img/imgGallery/cancel1.png" class="close-btn" onclick="stopVideo4()">   <!-- onclick="stopVideo()" -->
    </div>

    <!-- ~Footer -->
    <footer class="text-white pt-2 pb-4 mt-3" id="footer" style="background-color: #DC0000;">
      <div class="container text-center text-md-start">
        <div class="row text-center text-md-start footertop">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <img src="/src/img/wmsu.png" alt="logo footer" class="mb-4 imgfoot">
            <p class="text-uppercase" style="font-size: 12px;">Data Protection Office</p>
            <P style="margin-top: -20px; font-size: 12px;">Western Mindanao State University</P>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-2 fw-bold" style="color: #FFF6C3;">Products</h6>
          <p class="mb-2" style="font-size: 12px;">
            <a href="#!" class="text-white fw-semibold" style="text-decoration: none;">MDBootstrap</a>
          </p>
          <p class="mb-2" style="font-size: 12px;">
            <a href="#!" class="text-white fw-semibold" style="text-decoration: none;">Creativity</a>
          </p>
          <p class="mb-2" style="font-size: 12px;">
            <a href="#!" class="text-white fw-semibold" style="text-decoration: none;">SourceFiles</a>
          </p>
          <p class="mb-2" style="font-size: 12px;">
            <a href="#!" class="text-white fw-semibold" style="text-decoration: none;">MDBootstrap</a>
          </p>
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-2 fw-bold" style="color: #FFF6C3;">Useful Links</h6>
          <p class="mb-2" style="font-size: 12px;">
            <a href="#!" class="text-white fw-semibold" style="text-decoration: none;">Downloadables</a>
          </p>
          <p class="mb-2" style="font-size: 12px;">
            <a href="#!" class="text-white fw-semibold" style="text-decoration: none;">Archives</a>
          </p>
          <p class="mb-2" style="font-size: 12px;">
            <a href="#!" class="text-white fw-semibold" style="text-decoration: none;">Help</a>
          </p>
          <p class="mb-2" style="font-size: 12px;">
            <a href="#!" class="text-white fw-semibold" style="text-decoration: none;">MyeClass</a>
          </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-2 fw-bold" style="color: #FFF6C3;">Contacts</h6>
            <p class="mb-2" style="font-size: 12px;">
              <i class="fas fa-home me-3"></i>Normal Road, Baliwasan, 7000 Zamboanga City, Philippines
            </p>
            <p class="mb-2" style="font-size: 12px;">
              <i class="fas fa-envelope me-3"></i>Wmsu@edu.ph.com
            </p>
            <p class="mb-2" style="font-size: 12px;">
              <i class="fas fa-phone me-3"></i>507-506-20412
            </p>
          </div>
        </div>
        <hr class="mb-4 mt-2">

        <div class="row align-items-center footbottom">
          <div class="col-md-7 col-lg-8">
            <p>
              Copyright @2023 All rights reserved by:
              <a href="#" style="text-decoration: none;">
                <strong>WMSU</strong>
              </a>
            </p>
          </div>
          <div class="col-md-5 col-lg-4">
            <div class="text-center text-md-start">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <p class="btn-floating btn-sm text-white" style="font-size: 13px; ">Follow us:</p>
                </li>
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-black" style="font-size: 14px; "><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-black" style="font-size: 14px;"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-black" style="font-size: 14px;"><i class="fab fa-google-plus"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-black" style="font-size: 14px;"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- !Bootstrap JS -->
    <script>
      var videoPlayer = document.getElementById("videoPlayer");
      var myVideo = document.getElementById("myVideo");
      var videoPlayer2 = document.getElementById("videoPlayer2");
      var myVideo2 = document.getElementById("myVideo2");
      var videoPlayer3 = document.getElementById("videoPlayer3");
      var myVideo3 = document.getElementById("myVideo3");
      var videoPlayer4 = document.getElementById("videoPlayer4");
      var myVideo4 = document.getElementById("myVideo4");
      function stopVideo () {
        videoPlayer.style.display = "none"; // hide video player
        myVideo.pause(); // pause video
      }
      function stopVideo2 () {
        videoPlayer2.style.display = "none"; // hide video player
        myVideo2.pause(); // pause video
      }
      function stopVideo3 () {
        videoPlayer3.style.display = "none"; // hide video player
        myVideo3.pause(); // pause video
      }
      function stopVideo4 () {
        videoPlayer4.style.display = "none"; // hide video player
        myVideo4.pause(); // pause video
      }

      //play video
      function playVideo () {
        videoPlayer.style.display = "block"; // show video player
        myVideo.play(); // play video
      }
      function playVideo2 () {
        videoPlayer2.style.display = "block"; // show video player
        myVideo2.play(); // play video
      }
      function playVideo3 () {
        videoPlayer3.style.display = "block"; // show video player
        myVideo3.play(); // play video
      }
      function playVideo4 () {
        videoPlayer4.style.display = "block"; // show video player
        myVideo4.play(); // play video
      }
    </script>
  </body>
</html>