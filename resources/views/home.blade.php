@extends('master.layout')
@section('css')
<link rel="stylesheet" type="text/css" href="css/sty.css">
@endsection
@section('body')
 <nav class="navbar  nv1 navbar-expand-lg ">
        <div class="container">
          <a class="navbar" href="#">
            <img src="images/royaumedumaroc.png" alt="" width="100" height="100">
          </a>
          <div style="text-align:center;">
            <h2 >ROYAUME DU MAROC</h2>
            <br>
            <h3>Ministère de l’Equipement et de l’eau</h3>
          </div>
          <a class="navbar" href="#">
            <img src="images/logo.png" alt="" width="100" height="100">
          </a>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg nv2 fixed-top">
        <div class="container">
          <a class="navbar-brand lin" href="#">Provaince de SAFI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
              <li class="nav-item pe-5 ">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item  pe-5">
                <a class="nav-link" href="#authors">Administration</a>
              </li>
              <li class="nav-item  pe-5">
                <a class="nav-link" href="#">contactez</a>
              </li>
              <li class="nav-item dropdown pe-5 me-5 ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Service
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Eau</a></li>
                  <li><a class="dropdown-item" href="#">Anothe,,,</a></li>
                </ul>
              </li>
            </ul>
            <!-- <div class="search ps-3 pe-3">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div> -->
            <form  class="d-flex me-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn bt" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <a href="indexar.html"><button type="button" class="btn bt me-2 " href="https//:www.google.com">Ar</button></a>
            <a href="#"><button type="button" class="btn fr ">Fr</button></a>
          </div>
        </div>
      </nav>
      <!-- <div class="landing">
        <div class="text-center text-light">
          <h1>jkdcdccjjdkcjjclxjc</h1>
          <p>dlcdlclhcklcjklcjklxjckljxkcjkxklcjklxcklxlclclycnm,xhxch</p>
        </div>
      </div> -->
      <div class="slider">
        <div id="carouselExampleSlidesOnly" class="carousel c1 slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <h1>hdhdhdhdhdh</h1>
              <p>efhhjlhsc,hcjxcj,xcj,j,xcj,xcj,j,cdjjkjkdcdcdkchkdccccccccccccd
                jdcccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc
              </p>
            </div>
          </div>
        </div>
      </div>

      <section id="authors" class="my-5 text-center">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="info-header mb-5">
                <h1 class="text-primary pb-3">
                  Meet The Authors
                </h1>
                <p class="lead">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias laborum numquam aperiam dolores a porro!
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5">
              <div class="card">
                <div class="card-body">
                  <img src="" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h3>Susan Williams</h3>
                  <h5 class="text-muted">Lead Writer</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi nostrum, ab libero voluptas officia.</p>
                  <div class="d-flex justify-content-center">
                    <div class="p-4">
                      <a href="http://facebook.com">
                        <i class="fab fa-facebook"></i>
                      </a>
                    </div>
                    <div class="p-4">
                      <a href="http://twitter.com">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </div>
                    <div class="p-4">
                      <a href="http://instagram.com">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5">
              <div class="card">
                <div class="card-body">
                  <img src="" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h3>Grace Smith</h3>
                  <h5 class="text-muted">Co-Writer</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi nostrum, ab libero voluptas officia.</p>
                  <div class="d-flex justify-content-center">
                    <div class="p-4">
                      <a href="http://facebook.com">
                        <i class="fab fa-facebook"></i>
                      </a>
                    </div>
                    <div class="p-4">
                      <a href="http://twitter.com">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </div>
                    <div class="p-4">
                      <a href="http://instagram.com">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5">
              <div class="card">
                <div class="card-body">
                  <img src="" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h3>Kevin Swanson</h3>
                  <h5 class="text-muted">Designer</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi nostrum, ab libero voluptas officia.</p>
                  <div class="d-flex justify-content-center">
                    <div class="p-4">
                      <a href="http://facebook.com">
                        <i class="fab fa-facebook"></i>
                      </a>
                    </div>
                    <div class="p-4">
                      <a href="http://twitter.com">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </div>
                    <div class="p-4">
                      <a href="http://instagram.com">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <div class="text-center">
        <form action="" style="max-width:500px;margin:auto;">
          <h1 class="h3 mb-3 font-weight-normal">Envouyez un message</h1>
          <input type="email" id="emailAddress" class="form-control mb-3" placeholder="Email" required >
          <input type="text" id="Passwors" class="form-control mb-3" placeholder="Nom" required>
          <textarea class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"></textarea>
          <div class="d-grid gap-2">
            <button class="btn btn-primary">Envouyer</button>
          </div>
        </form>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide " style="max-width:1000px;margin:auto ;margin-top:50px;" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/eau-potable_1_1000x500.jpg" class="d-block w-100 h-50" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/eau-potable_couv_eau-verre_1000x500.jpg" class="d-block w-100 h-50" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/ThinkstockPhotos-473436198_1000x500.jpg" class="d-block w-100 " alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>






      <div class="container text-center foot">
        <footer class="py-5" >
          <div class="row">
            <div class="col-4">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
              </ul>
            </div>

            <div class="col-4">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
              </ul>
            </div>

            <div class="col-4">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
              </ul>
            </div>
          <div class="d-flex justify-content-between py-5 pe-5 ps-5  my-3 border-top ">
            <p>© 2021 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-light" href="#"><i class="fa-brands fa-facebook"></i></a></li>
              <li class="ms-3"><a class="link-light" href="#"><i class="fa-brands fa-instagram"></i></a></li>
              <li class="ms-3"><a class="link-light" href="#"><i class="fa-brands fa-twitter"></i></a></li>
            </ul>
          </div>
        </footer>
      </div>
@endsection


