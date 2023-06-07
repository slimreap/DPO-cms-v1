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
    <title>About Us</title>
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
              <a class="nav-link"  href="{{ route ('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route ('about') }}">About</a>
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
    <!-- !mission vision-->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-6">
            <h3 class="h3">Mission</h3>
            <p>The Western Mindanao State University, set in a culturally diverse environment, shall pursue a vibrant socio-economic agenda that include:
              <ul>
                <li>A relevant instruction paradigm in the education and training of competent and responsive human resource for societal and industry needs;</li>
                <li>A home for intellectual formation that generates knowledge for people empowerment, social transformation and sustainable development; and,</li>
                <li>A hub where science, technology and innovation flourish, enriched by the wisdom of the Arts and Letters, and Philosophy.</li>
              </ul>
            </p>
          </div>

          <div class="col-xs-6">
            <h3  class="h3">Vision</h3>
            <p>The University of Choice for higher learning with strong research orientation that produces professionals who are socially responsive to and responsible for human development; ecological sustainability; and, peace and security within and beyond the region</p>
          </div>

          <div class="col-xs-12">
            <h3  class="h3">Mandate</h3>
            <p>The creation of the Western Mindanao State University on June 10, 1987 outlined its basic mission:

              “…serve as an instrument for the promotion of socio-economic advancement of the various cultural communities inhabiting therein,”

              While P.D. 1427, which legitimitized its creation, embodied the above mission and defined its role in Western Mindanao, it simply echoed the same mission that saw establishment of the Zamboanga Normal School sixty years earlier. The institution which started as a teacher training school in 1918 by the Department of Mindanao and Sulu was to serve the educational needs of the diverse cultural communities of the southern Philippine provinces.

              The Western Mindanao State University today stands with the mandate of serving as a flagship educational institution and increasing the access to quality education to a wider number of people in a more pluralistic social, economic and cultural setting. It is further advance the philosophy that education remains to be the most potent tool for change in the process of socio-economic development and shall serve as a lead institution in the promotion of the same.

              In strengthening its basic mandate of democratizing equal access to the basic right of education, R.A. 8292 further mandates the university:

              “…to absorb non-chartered tertiary institutions within their respective provinces in coordination with the CHED and in consultation with the Department of Budget and Management, and offer them needed programs or courses, to promote and carry out equal access to educational opportunities mandated by the constitution.”</p>
          </div>

          <div class="col-xs-12">
            <h3  class="h3">University Function</h3>
            <p>In the fulfilment of its educational mandate, the Western Mindanao State University is tasked to perform a four-pronged function in evolving a genuine educational framework relevant to social needs and standards.</p>
            <h6 class="h6">Instruction</h6>
            <p>The university offers curricular programs that suit to the needs of the diverse sectors of society with focus on the development potentials of industries</p>
            <br>
            <p>It constantly initiates the review and revision of course offerings and the updating of their contents that should be reflective of the needs of the times. It believes that the relevance of its offerings can only be gauged by the extent to which the needs of the greater society are served by its graduates.</p>
            <br>
            <h6 class="h6">Research</h6>
            <p>The role of research is to expand the frontiers of knowledge. It remains to be education’s major contribution to society’s reservoir of knowledge and innovation.
              The university research function is anchored on CHED’s long term development plan which provides that “Research in priority areas shall be pursued not only for improving educational programs but also for advancing inventions and technologies.”</p>
            <br>
            <p>Research continues to set the base for knowledge acquisition and application in rational decision-making and problem solving.</p>
            <h6 class="h6">Extension</h6>
            <p>The primary goal of extension is to reach out to peoples and communities who normally cannot avail of the services of the formal educational system. It largely involves the formulation and administration of diversified technical, educational and community development services that are mostly concentrated in depressed areas.</p>
            <br>
            <p>Extension services are aimed at improving the quality of life at the grassroots level and create complementary services to industry, the academe, and community in the vision of sustainable development.</p>
            <br>
            <h6 class="h6">Production</h6>
            <p>The performance of the university’s production function complements the concern of developing and utilizing the maximum potentials of both its human and capital resources.

              It basically rests on the enhancement of the output potentials of units to provide a sustainable source of income to finance its many educational and social concerns. This is to aid in unburdening government of the bloating costs of subsidy in the operations of state-run colleges and universities.
              
              While production would show direct evidence of the relevance of educational institutions in actual social processes, the generation of alternative sources of income from production ventures would help spur and sustain the growth and development of the university.</p>
          </div>

        </div>
      </div>
    </section>

    <!-- ?SECTION-->
    <div class="row custom-row justify-content-center align-items-center"> 
      <div class="card1 col-sm-5 " style="width: 35rem;">
          <div class="card-body">
            <h5 class="card-title text-dark">Privacy Policy</h5>
            <a href="">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </a>
            <span>feb 20 2002</span>
          </div>
      </div>
      <div class="card1 col-sm-3 " style="width: 35rem;">
        <div class="card-body">
          <h5 class="card-title text-dark">History</h5>
          <a href="">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </a>
          <span>feb 20 2002</span>
        </div>
      </div>
      <div class="card1 col-sm-5" style="width: 35rem;">
        <div class="card-body">
          <h5 class="card-title text-dark">Quality Policy</h5>
          <a href="">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </a>
          <span>feb 20 2002</span>
        </div>
      </div>
      <div class="card1" style="width: 35rem;">
        <div class="card-body">
          <h5 class="card-title text-dark">Strategic Plan</h5>
          <a href="">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </a>
          <span>feb 20 2002</span>
        </div>
      </div>
    </div>
    <br>
    <br>
    

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