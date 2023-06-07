<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <title>Document</title>
</head>

  <body class="d-flex flex-column">
  
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="container-fluid crimson">


          <div class="flex flex-column mx-auto">

            <div class="container mx-auto text-center mb-2">
              <a class="navbar-brand mx-auto" href="#">
                <img src="{{asset('/storage/images/WMSU.png')}}" class=" img-thumbnail rounded-circle px-auto" width="100px" height="100px" alt="">
    
              </a>
            </div>
  
  
            <div class="d-block">
              <span class="text-center">
                <h3 class="text-white">WESTERN MINDANAO STATE UNIVERSITY</h3>
                
              </span>
              <span class="text-center">
                <h3 class="text-white">DATA PROTECTION OFFICE</h3>
                
              </span>
  
            </div>

            
          <button class="navbar-toggler d-block mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><box-icon type='solid' name='chevrons-down'></box-icon></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav d-flex flex-row gap-3 fs-3 justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="#">Privacy Policies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">InfoSec</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">About UDPO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Contact UDPO</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </nav>


{{-- Carousel --}}

@yield('carousel')


{{-- News Section --}}

@yield('news')

{{-- Magazine --}}

@yield('magazine')

{{-- Data Privacy Section --}}

@yield('dps')


<footer class="flex fixed-buttom border-top border-dark">
  <div class="footer container-fluid d-flex crimson justify-content-center mt-auto">
    
<div class="d-flex flex-row">
  <div class="p-1">
    <img src="{{asset('/storage/images/WMSU.png')}}" class="img-thumbnail rounded-circle" width="80px" height="80px" alt="">

  </div>

  <div class="p-1 text-center text-white">
    <span class="h3">
      WESTERN MINDANAO STATE UNIVERSITY
    </span>
    <p>
      Normal Road, Baliwasan
      7000 Zamboanga City
      Philippines
    </p>
  </div>
</div>

</footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>