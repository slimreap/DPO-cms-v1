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
    <!-- ~fontawesome Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Contact</title>
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
                <a class="nav-link" href="{{route ('announce') }}">Announcements</a>
              </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route ('contact') }}">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <!--Contact section -->
    <div class="form-area">
      <div class="container">
        <div class="row single-form g-0">
          <div class="col-sm-12 col-lg-6">
            <div class="left">
              <h2><span>Contact Us for</span> <br>Business Enquies</h2>
              <div class="contactInfo">
                <div class="box" style="color: #4E6C50;">
                  <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                  <div class="text" style="color: #FAECD6;">
                    <h3>Address</h3>
                    <p>WMSU, DPO, 2400, <br>Dipolog City, <br>Zamboanga del Norte</p>
                  </div>
                </div>
                <div class="box" style="color: #4E6C50;">
                  <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text" style="color: #FAECD6;">
                      <h3>Phone</h3>
                      <p>507-506-20412</p>
                  </div>
                </div>
                <div class="box" style="color: #4E6C50;">
                  <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text" style="color: #FAECD6;">
                      <h3>Email</h3>
                      <p>Wmsu@edu.ph</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6">
            <div class="right">
              <i class="fa fa-caret-left"></i>
              <form class="needs-validation" novalidate>
                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="validationCustom01" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                  <div class="invalid-feedback">
                    Please enter valid name.
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="validationCustom02" class="form-label">Subject</label>
                  <input type="text" class="form-control" id="validationCustom02" required>
                  <div class="invalid-feedback">
                    Please enter valid subject.
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="validationCustomUsername" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">&#128231;</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please choose an email.
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="validationCustom03" class="form-label">Message</label>
                  <textarea class="form-control" id="validationCustom03" required></textarea>
                  <div class="invalid-feedback">
                    Please provide a message.
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- ~FOOTER-->

    <footer class="text-center text-white" style="background-color: #9c1a1a">
      <div class="container">
        <section class="mt-5">
          <div class="row text-center d-flex justify-content-center pt-5">
            <div class="col-md-2">
              <p class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">Downloadables</a>
              </p>
            </div>
            <div class="col-md-2">
              <p class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">Archives</a>
              </p>
            </div>
            <div class="col-md-2">
              <p class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">Career Opportunity</a>
              </p>
            </div>
            <div class="col-md-2">
              <p class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">Help</a>
              </p>
            </div>
            <div class="col-md-2">
              <p class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">MyeClass</a>
              </p>
            </div>
          </div>
        </section>
        <hr class="my-2" />
    
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
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)" id="copyright">
        WMSU Copyright © 2016. All Rights Reserved. 
      </div>
    </div>
  </footer>

    <!-- !Form validation -->
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
      })()
    </script>
  </body>
</html>