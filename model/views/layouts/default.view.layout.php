<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS link -->
    <link rel="stylesheet" href="css/style.css"/>
  <link rel="shorcut icon" href="img/default.png">
    <title>Index | Csympa</title>
  </head>
  <body>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent shadow">
        <div class="container-fluid">

            <!-- LOGO -->
          <a class="navbar-brand" href="#"><img src="img/default-monochrome.svg" alt="" width="150" leight="60"></a>

          <!--toggle Btn -->
          <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Sidebar -->
          <div class=" sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            
            <!-- Sidebar Header -->
            <div class="offcanvas-header text-white border-bottom">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- Sidebar Body -->
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="http://andrs.blog/">Marketing</a>
                </li>

                <li class="nav-item mx-2">
                  <a class="nav-link" href="http://andrs.blog/contact">Technologie</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">Competence</a>
                  </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#"> A propos</a>
                </li>
            </ul>
            <!-- Login/ Sign up -->
            <div class="d-flex justify-content-center align-items-center gap-3">
              <a href="#login" class="text-white">Login</a>
              <a href="#signup" class="text-white text-decoration-none px-3 py-1 bg-primary rounded-4" style="background-color: #4ce5f9">Sign Up</a>
            </div>
            </div>
          </div>
        </div>
      </nav>
    <section id="article">

    <!-- heading -->
    <div class="blog-heading">
      <span> 
        <h1>Marketing</h1> 
     </span>
      <h2> <i>Des contenus pertinents pour les professionnels du marketing digital: <br> nouveautés,guide et conseils. </i></h2>
    </div>
 <!-- articles container -->
 <div class="article-container">
    <!-- box 1 -->
    <div class="article-box">
      <!-- img -->
      <div class="article-img">
        <img src="img/instagram.jpg" alt="instagram" width="350" height="250">
      </div>
    </div>
  </div>
    </section>
 
  











































      
 
  <main role="main">
    <?=$pageContent?> 
  </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>



<!-- <header>
         <nav class="navbar navbar-expand.lg navbar-dark bg-dark shadow">
        <div class="container my-2">
              <img src="/img/logo/default.png" alt="LOGO" width="50" height="50">
              <form action="" class="form-inline my-2 my-lg-0" method="GET">
                <input class="form-control mr-sm-2 bg-dark" type="search" placeholder=" Trouver quelque chose...">
              </form>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="http://andrs.blog/">Index</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://andrs.blog/contact">Contact</a>
                </li>
                 
              </ul>
            </div>
  </div>
</nav>
 </header> -->