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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"  integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!-- !Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Announcement DPO</title>
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
                <a class="nav-link" href="/src/home.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="/src/about.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item " href="/src/about.html">Mission & Vision</a></li>
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
                <a class="nav-link active text-white text-bg-danger text-center" href="/src/announce.html">Announcement</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/src/contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>


    <!-- &Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-4" style="margin-top: 4rem;">
          <div class="card card1">
            <img src="/src/img/imgGallery/pex1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title4</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-danger">Link</button>
            </div>
          </div>
        </div>
        <div class="col-md-4" style="margin-top: 4rem;">
          <div class="card card1">
            <img src="/src/img/imgGallery/pex1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title2</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-danger">Link</button>
            </div>
          </div>
        </div>

        <div class="col-md-4" style="margin-top: 4rem;">
          <div class="card card1">
            <img src="/src/img/imgGallery/pex1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title3</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-danger">Link</button>
            </div>
          </div>
        </div>

        <div class="col-md-4" style="margin-top: 4rem;">
          <div class="card card1">
            <img src="/src/img/imgGallery/pex1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title4</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-danger">Link</button>
            </div>
          </div>
        </div>

        <div class="col-md-4" style="margin-top: 4rem;">
          <div class="card card1">
            <img src="/src/img/imgGallery/pex1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title5</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-danger">Link</button>
            </div>
          </div>
        </div>

        <div class="col-md-4" style="margin-top: 4rem;">
          <div class="card card1">
            <img src="/src/img/imgGallery/pex1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title6</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-danger">Link</button>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container my-5">
      <h1 class="text-center fw-bold display-1 mb-5">Events/<span class="text-danger">News</span></h1>
      <div class="row">
          <div class="col-12 m-auto">
              <div class="owl-carousel owl-theme">
                  <div class="item mb-4">
                    <a href="#" class="text-decoration-none text-danger">
                      <div class="card border-0 shadow">
                        <div class="img-wrapper">
                          <img src="/src/img/imgGallery/pex1.jpg" alt="" class="card-img-top imganon">
                        </div>
                          <div class="card-body">
                              <div class="card-title text-center">
                                  <h4>Carousel1</h4>
                              </div>
                          </div>
                      </div>
                    </a>
                  </div>

                  <div class="item">
                    <a href="#" class="text-decoration-none text-danger">
                      <div class="card border-0 shadow">
                        <div class="img-wrapper">
                          <img src="/src/img/imgGallery/pex2.jpg" alt="" class="card-img-top">
                        </div>
                          <div class="card-body">
                              <div class="card-title text-center">
                                  <h4>Carousel2</h4>
                              </div>
                          </div>
                      </div>
                    </a>
                  </div>
                  <div class="item">
                    <a href="#" class="text-decoration-none text-danger">
                      <div class="card border-0 shadow">
                        <div class="img-wrapper">
                          <img src="/src/img/imgGallery/pex3.jpg" alt="" class="card-img-top">
                        </div>
                          <div class="card-body">
                              <div class="card-title text-center">
                                  <h4>Carousel3</h4>
                              </div>
                          </div>
                      </div>
                    </a>
                  </div>
                  <div class="item">
                    <a href="#" class="text-decoration-none text-danger">
                      <div class="card border-0 shadow">
                        <div class="img-wrapper">
                          <img src="/src/img/imgGallery/pex4.jpg" alt="" class="card-img-top">
                        </div>
                          <div class="card-body">
                              <div class="card-title text-center">
                                  <h4>Carousel4</h4>
                              </div>
                          </div>
                      </div>
                    </a>
                  </div>
                  <div class="item">
                    <a href="#" class="text-decoration-none text-danger">
                      <div class="card border-0 shadow">
                        <div class="img-wrapper">
                          <img src="/src/img/imgGallery/pex1.jpg" alt="" class="card-img-top">
                        </div>
                          <div class="card-body">
                              <div class="card-title text-center">
                                  <h4>Carousel5</h4>
                              </div>
                          </div>
                      </div>
                    </a>
                  </div>
                  <div class="item">
                    <a href="#" class="text-decoration-none text-danger">
                      <div class="card border-0 shadow">
                        <div class="img-wrapper">
                          <img src="/src/img/imgGallery/pex2.jpg" alt="" class="card-img-top">
                        </div>
                          <div class="card-body">
                              <div class="card-title text-center">
                                  <h4>Carousel6</h4>
                              </div>
                          </div>
                      </div>
                    </a>
                  </div>
              </div>
          </div>
      </div>
  </div>

    <!-- &Pagination -->
    <!-- <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <span class="page-link">Previous</span>
        </li>
        <li class="page-item active"><a class="page-link" href="/src/announce.html">1</a></li>
        <li class="page-item" aria-current="page">
          <a class="page-link" href="">2</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav> -->


    <!-- ^Footer -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
  </body>
</html>