  <!doctype html>
  <html lang="en" id="top-home">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?= base_url('vendor/My_Portfolio/css/bootstrap.min.css'); ?>">


      <!-- My CSS -->
      <link rel="stylesheet" href="vendor/style.css">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?= base_url('vendor/My_Portfolio/css/all.css'); ?>">


      <title>My Portfolio</title>
  </head>

  <body>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  navbar-dark text-light  bg-primary fixed-top" id="mainNav">
          <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="#home">
                  <img class="rounded-circle" src="<?= base_url('vendor/My_Portfolio/'); ?>img/logo.png" alt="#">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon text-uppercase btn btn-outline-primary"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav text-warning ml-auto text-uppercase">
                      <li class="nav-item mr-2">
                          <a href="#home" class="js-scroll-trigger  nav-link">Home</a>
                      </li>
                      <li class="nav-item mr-2">
                          <a href="#about" class="js-scroll-trigger nav-link">About</a>
                      </li>
                      <li class="nav-item mr-2">
                          <a href="#project" class="js-scroll-trigger  nav-link">Project</a>
                      </li>
                      <li class="nav-item">
                          <a href="#contact" class="js-scroll-trigger   nav-link">Contact</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- Akhir Navbar -->

      <!-- Header -->

      <header id="home" class="head">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-12 col-sm-12 col-md-12">
                      <div class="text-head">
                          <h2 class="mb-3 display-3 d-flex text-center mx-auto justify-content-center text-warning border-warning shadow-lg text1">Hello, How are you ?
                          </h2>
                          <h2 class=" mb-3 mt-3 d-flex mx-auto justify-content-center text-center text-warning display-5 text2">My name is unggar
                              madi
                          </h2>
                          <h2 class=" d-flex mx-auto justify-content-center text-center text-warning display-5 mt-3 mb-3 text3">Focused on graphic
                              web
                              design,
                              web
                              development,
                          </h2>
                          <h2 class="d-flex mx-auto display-5 justify-content-center text-center text-warning text4">
                              passionate about
                              books
                              and
                              technology</h2>
                          <div class="row mt-5 col-md-8 col-sm-10 col-lg-12 mx-auto justify-content-center text-l text-warning mb-3 mt-3 shadow text-capitalize display-4">Featured Works
                          </div>
                          <a href="#project"><button type="button" class="btn btn-primary btn-md mt-4 d-flex mx-auto js-scroll-trigger">Tell
                              me
                              more</button></a> 
                          <p class="justify-content-center d-flex text-warning display-4">
                              -------
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </header>

      </div>
      <!-- Akhir jumbotron -->
      <br>
      <br>
      <br>
      <!-- About -->
      <section id="about" class="container bg-light">
          <h1 class="row display-4 mt-5 mb-5 text-uppercase justify-content-center text-primary">ABOUT</h1>
          <div class="d-flex mt-5 mb-5">
              <picture class="col-sm-6 col-md-6">
                  <img src="<?= base_url('vendor/My_Portfolio/'); ?>img/pro.jpg" class="timeline-image ml-5 mb-5 rounded-circle img-fluid float-left" alt="...">
              </picture>
              <div class="row justify-content-center ml-5">
                  <div class="mt-3 mb-5 text-warning display-5 col-sm-8 col-md-8 mt-0 ">I am able to communicate well, good analytical skills, honesty and perseverance in working I always put forward, committed to the goals and work I do, and have a desire to continue to grow.</div>
              </div>
          </div>
      </section>
      <br>
      <br>
      <br>
      <!-- Akhir About -->


      <!-- Project -->
      <section class="container mt-5 mb-5" id="project">
          <h1 class="display-4 justify-content-center row mt-3 mb-5 text-primary">PROJECT</h1>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <a href="<?= base_url('home'); ?>">
                          <img src="<?= base_url('vendor/My_Portfolio/'); ?>img/bs.png" class="d-block" alt="..." style="width: 100%; height: 100%;">
                      </a>
                  </div>
                  <div class="carousel-item">
                      <a href="<?= base_url('awal'); ?>">
                          <img src="<?= base_url('vendor/My_Portfolio/'); ?>img/madi_str.png" class="d-flex" alt="..." style="width: 100%; height: 100%;">
                      </a>
                  </div>
                  <div class="carousel-item">
                      <a href="<?= base_url('portfolio'); ?>">
                          <img src="<?= base_url('vendor/My_Portfolio/'); ?>img/my_port.png" class="d-flex" alt="..." style="width: 100%; height: 100%;">
                      </a>
                  </div>
                  <div class="carousel-item">
                      <a href="https://www.unggarmadi.com/">
                          <img src="<?= base_url('vendor/My_Portfolio/'); ?>img/blog.png" class="d-flex" alt="..." style="width: 100%; height: 100%;">
                      </a>
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </section>
      <br>
      <br>
      <br>
      <!-- Akhir Project -->

      <!-- Contact Section -->
      <section class="bg-light mt-5 mb-5">
          <div id="contact" class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8 text-center">
                      <h1 class="text-primary display-4 justify-content-center mt-5">CONTACT</h1>
                      <h2 class="mt-0 text-warning mt-4 mb-3">Let's Get In Touch!</h2>
                      <hr class="divider my-4">
                      <p class="text-warning mb-5 mt-5">Ready to start your next project with me? Give me a call or send me
                          an
                          email
                          and me will get back to you as soon as possible!</p>
                  </div>
              </div>
              <div class="row justify-content-center">
                  <div class="col-lg-4 ml-auto text-center mb-5 mt-5 mb-lg-0">
                      <i class="fas fa-phone fa-3x mb-3 text-primary"></i>
                      <div class="text-warning">+62 812 8000 7814</div>
                      <hr class="divider my-2">
                  </div>
                  <div class="col-lg-4 mr-auto text-center mt-5 mb-5">
                      <a class="fas fa-envelope fa-3x mb-3 text-primary"></a>
                      <!-- Make sure to change the email address in anchor text AND the link below! -->
                      <a class="d-block text-warning" href="mailto:unggarmadi@gmail.com">unggarmadi@gmail.com</a>
                      <hr class="divider my-2">
                  </div>
              </div>
          </div>
      </section>


      <!-- Social -->
      <section>
          <div class="container-fluid mt-5 mb-5">
              <div class="row social justify-content-center">
                  <li class="list-inline-item">
                      <a href="#">
                          <i class="fab fa-twitter"></i>
                      </a>
                      <hr class="divider my-2">
                  </li>
                  <li class="list-inline-item">
                      <a href="#">
                          <i class="fab fa-facebook"></i>
                      </a>
                      <hr class="divider my-2">
                  </li>
                  <li class="list-inline-item">
                      <a href="#">
                          <i class="fab fa-linkedin"></i>
                      </a>
                      <hr class="divider my-2">
                  </li>
                   <li class="list-inline-item">
                      <a href="https://github.com/unggarmadi21">
                          <i class="fab fa-github"></i>
                      </a>
                      <hr class="divider my-2">
                  </li>
              </div>
          </div>
      </section>



      <!-- Footer -->
      <footer id="footer">
          <div class="container-fluid bg-primary mt-5">
              <div class="row d-flex justify-content-center">
                  <div class="mt-4 mb-4 ml-2 text-decoration-none text-white text-center"> Copyright My Website
                      &copy; 2020
                  </div>
              </div>
          </div>
      </footer> <!-- Akhir Footer -->


      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?= base_url('vendor/My_Portfolio/'); ?>css/vendor/jquery/jquery.min.js"></script>
      <script src="<?= base_url('vendor/My_Portfolio/'); ?>js/bootstrap.bundle.min.js"></script>
      <script src="<?= base_url('vendor/My_Portfolio/'); ?>css/vendor/jquery-easing/jquery.easing.min.js"></script>
      <script src="<?= base_url('vendor/My_Portfolio/'); ?>js/jqBootstrapValidation.js"></script>


      <!-- Optional JavaScript -->
      <script src="<?= base_url('vendor/'); ?>myjs.js"></script>

  </body>

  </html>