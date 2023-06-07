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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- !Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet">
    <!-- !Email JS-->
    <script src="script.js" type="text/javascript"></script>
    <script src="email.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
      (function(){
          emailjs.init("6bC389s1UNVzNx0f8");
      })();
    </script>
    <title>Contact DPO</title>
  </head>

  <body id="body-contact">
    <!-- ~Navbar -->
    <nav class="navbar bg-body-tertiary fixed-top p-0">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <div class="container-fluid">
            <img src="../src/img/logo.png" alt="logo" width="250px">
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon" ></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <img src="../src/img/wmsu.png" alt="wmsulogo" width="100vh" height="70vh"
              class="d-inline-block align-text-top">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Data Protection Office</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/src/home.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/src/about.html" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
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
                <a class="nav-link active text-white text-bg-danger text-center" href="/src/contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- *Content -->
    <div class="container">
      <section class="contact" style="padding-left: 100px;">
        <div class="contact-form ">
          <h1>Contact <span>Us</span></h1>
          <p>Message Us for Enquiries. Connect us via phone: 509-234-123-554 or email: wmsu.edu.ph</p>
          <!-- action="https://formsubmit.co/9b173f54b6fe4c40ee0d9c7e3cf1f0a3" method="POST" class="needs-validation" -->
          <form action="https://formsubmit.co/9b173f54b6fe4c40ee0d9c7e3cf1f0a3" method="POST" class="needs-validation" novalidate>
            <div>
              <input type="text" id="fullName" class="form-control" name="fullName" placeholder="Full Name" required>
              <div class="valid-feedback">
                Thats a name!
              </div>
              <div class="invalid-feedback">
                Enter your name!
              </div>
            </div>

            <div>
              <input type="email" class="form-control" id="email_id" name="email" placeholder="E-mail"
                required>
              <div class="invalid-feedback">
                Enter valid email
              </div>
            </div>

            <div>
              <input type="text"  id="subject" class="form-control" name="subject" placeholder="Subject" required>
              <div class="invalid-feedback">
                Choose a Subject!
              </div>
            </div>

            <div>
              <textarea id="message" class="form-control" name="message" cols="30" rows="10" placeholder="Your Message"
                required></textarea>
              <div class="invalid-feedback">
                Empty!
              </div>
            </div>
            <input type="submit" value="Submit" class="btn" onclick="SendMail()"> 
          </form>
        </div>
        <div class="contact-img align-content-center">
          <img src="/src/img/anonce2.jpg" alt="" class="red">
        </div>
      </section>
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
                  <a href="" class="btn-floating btn-sm text-black" style="font-size: 14px; "><i
                      class="fab fa-facebook-f"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-black" style="font-size: 14px;"><i
                      class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-black" style="font-size: 14px;"><i
                      class="fab fa-google-plus"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="" class="btn-floating btn-sm text-black" style="font-size: 14px;"><i
                      class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- !validation custom effect JS -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
      })();
    </script>
    

  </body>

</html>