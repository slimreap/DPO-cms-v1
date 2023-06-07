<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> <img src="src/dpo1.png" alt="logo" style="height: 70px;"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="home.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About DPO
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="mv.html">Mission and Vision</a></li>
                  <li><a class="dropdown-item" href="announcement.html">Announcements</a></li>
                  <li><a class="dropdown-item" href="privacypolicy.html">Privacy Policies</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#contactus">Contact Us</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>

    <div class="row1 text-light"> CONTACT US</div> <!---row1 class--->

    <div class="container container7">
       <!-- Bootstrap 5 Contact Form Snippet -->

<div class="container-fluid px-5 my-5">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-sm-6 d-none d-sm-block bg-image"><img class="image2" src="src/wmsu.png" alt="" srcset=""></div>
              <div class="col-sm-6 p-4">
                <div class="text-center">
                  <div class="h3 fw-light">Contact form</div>
                  <p class="mb-4 text-muted">Got inquiries? Send us a message!</p>
                </div>
  
           
  
                <form id="contactForm"  action="https://formsubmit.co/orsabiamarieveron@gmail.com" method="POST">
  
                  <!-- Name Input -->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Name" required name="name" />
                    <label for="name">Name</label>
                    <div class="invalid-feedback" >Name is required.</div>
                  </div>
  
                  <!-- Email Input -->
                  <div class="form-floating mb-3">
                    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" required name="email"/>
                    <label for="emailAddress" >Email Address</label>
                    <div class="invalid-feedback" >Email Address is required.</div>
                    <div class="invalid-feedback" >Email Address Email is not valid.</div>
                  </div>
  
                  <!-- Message Input -->
                  <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" required name="message"></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback">Message is required.</div>
                  </div>
  
                  <!-- Submit success message -->
                  <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                      <div class="fw-bolder">Form submission successful!</div>
                    </div>
                  </div>
  
                  <!-- Submit error message -->
                  <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                  </div>
  
                  <!-- Submit button -->
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                  </div>
                </form>
                <!-- End of contact form -->
  
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </div> 
    </div>

   






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"> </script>
</body>
</html>