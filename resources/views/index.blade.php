@extends('master.layout')

@section('css')
	<link rel="stylesheet" type="text/css" href="css/sty.css">
    @if ( config('app.locale') == 'ar')
        <style>
            .ar{
                background-color: aqua;
                color: #19283f;
            }
    input{
        text-align: right;
    }
    textarea{
        text-align: right;
    }
        </style>
    @else
        <style>
            .fr{
                background-color: aqua;
                color: #19283f;
            }
        </style>

    @endif
    <link rel="icon" href="/images/royaumedumaroc.png">
@endsection
@section('titel')
Accueil
@endsection

@section('body')
<script src="js/index.js"></script>
    <nav class="navbar  nv1 navbar-expand-lg">
        <div class="container">
            @if ( config('app.locale') == 'ar')
          <a class="navbar" href="{{ url('/ar') }}">
            @else
          <a class="navbar" href="{{ url('/fr') }}">
            @endif
            <img src="images/royaumedumaroc.png" alt="" width="100" height="100">
          </a>
          <div style="text-align:center;">
            <h2>{{ __('index.2') }}</h2>
          </div>
          @if ( config('app.locale') == 'ar')
          <a class="navbar" href="{{ url('/ar') }}">
            @else
          <a class="navbar" href="{{ url('/fr') }}">
            @endif
            <img src="/images/gtt.jpg" alt="" width="100" height="100">
          </a>
        </div>
      </nav>
      @if ( config('app.locale') == 'fr')
      <nav class="navbar navbar-expand-lg nv2 sticky-top">
        <div class="container">
          <a class="navbar-brand lin " href="{{ url('/fr') }}" style="display: none">{{ __('index.3') }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
              <li class="nav-item pe-5 me-5">
                <a class="nav-link active" aria-current="page" href="{{ url('/fr') }}">{{ __('index.4') }}</a>
              </li>
              <li class="nav-item dropdown pe-5 me-5 ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('index.7') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('suivi/fr') }}">{{ __('index.8') }}</a></li>
                  <li><a class="dropdown-item  border-top" href="{{ url('depose/fr') }}">{{ __('index.9') }}</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown pe-5 me-5 ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('index.37') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('suivi/fr') }}">{{ __('index.34') }}</a></li>
                  <li><a class="dropdown-item" href="{{ url('depose/fr') }}">{{ __('index.35') }}</a></li>
                  <li><a class="dropdown-item" href="{{ url('depose/fr') }}">{{ __('index.36') }}</a></li>
                </ul>
              </li>
              {{-- <li class="nav-item  pe-5 me-5">
                <a class="nav-link" href="{{ url('espase_Admin/fr') }}">{{ __('index.5') }}</a>
              </li> --}}
              <li class="nav-item  pe-5 me-5">
                <a class="nav-link" href="#mssg">{{ __('index.6') }}</a>
              </li>
            </ul>


            <form  class="d-flex me-3" role="search">
              <input class="form-control me-2" type="search" placeholder="{{ __('index.16') }}" aria-label="Search">
              <button class="btn bt" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <a href="{{ url('ar') }}"><button type="button" class="btn bt ar me-2 " >{{ __('index.20') }}</button></a>
            <a href="{{ url('fr') }}"><button type="button" class="btn bt fr ">{{ __('index.21') }}</button></a>
          </div>
        </div>
      </nav>
      @endif


      @if ( config('app.locale') == 'ar')
      <nav class="navbar navbar-expand-lg nv2 sticky-top">
        <div class="container">
          <a class="navbar-brand lin " href="{{ url('/ar') }}" style="display: none">{{ __('index.3') }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form  class="d-flex me-3" role="search">
                <input class="form-control me-2" type="search" placeholder="{{ __('index.16') }}" aria-label="Search">
                <button class="btn bt" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
              </form>
              <a href="{{ url('ar') }}"><button type="button" class="btn bt ar me-2 " >{{ __('index.20') }}</button></a>
              <a href="{{ url('fr') }}"><button type="button" class="btn bt fr ">{{ __('index.21') }}</button></a>
            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
              <li class="nav-item  pe-5 me-5">
                <a class="nav-link" href="#mssg">{{ __('index.6') }}</a>
              </li>
              <li class="nav-item dropdown pe-5 me-5 ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('index.37') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('suivi/ar') }}">{{ __('index.34') }}</a></li>
                  <li><a class="dropdown-item" href="{{ url('depose/ar') }}">{{ __('index.35') }}</a></li>
                  <li><a class="dropdown-item" href="{{ url('depose/ar') }}">{{ __('index.36') }}</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown pe-5 me-5 ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('index.7') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('suivi/ar') }}">{{ __('index.8') }}</a></li>
                  <li><a class="dropdown-item" href="{{ url('depose/ar') }}">{{ __('index.9') }}</a></li>
                </ul>
              </li>
              <li class="nav-item pe-5 me-5">
                <a class="nav-link active" aria-current="page" href="{{ url('/ar') }}">{{ __('index.4') }}</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @endif

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="images/ThinkstockPhotos-473436198_1000x500.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="images/eau-potable_couv_eau-verre_1000x500.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="images/eau-potable_1_1000x500.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span> --}}
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span> --}}
        </button>
      </div>


      {{-- <section id="authors " class="my-5 text-center" style="margin-top: 50em">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="info-header mb-5">
                <h1 class="text-primary pb-3">
                    {{ __('index.19') }}
                </h1>
              </div>
            </div>
          </div>

          {{-- <div class="row">
            <div class="">
              <div class="card">
                <div class="card-body">
                  <img src="images/eau-potable_1_1000x500.jpg" alt="" class="img-fluid  w-50 mb-3">
                  <h3>{{ __('index.3') }}</h3>
                  <h5 class="text-muted">{{ __('index.17') }} </h5>
                  <p>{{ __('index.18') }}.................................................</p>
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
        </div> --}}
      {{-- </section> --}} 

<div class=" p-5  text-center mb-5" style="background-color: rgb(209, 249, 254);">
      <h1 class="text-center mb-5  pb-3 cci">{{ __('index.50') }}</h1>

      <div id="carouselExampleCaptions" class="carousel slide mb-5 ms-auto me-auto" data-bs-ride="false" style="max-width: 1100px">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <div style="display: none">{{$d=0}}</div>
          @foreach ($news as $new)
           <div style="display: none">{{$d++}}</div>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$d}}" aria-label="Slide 2"></button>
          @endforeach
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href=""><img src="/images/q.jpeg" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
              <h1></h1>
              <h3></h3>
            </div>
          </div>
          @foreach ($news as $new)
          <div class="carousel-item">
            <a href="{{$new->loca}}" target="_blank"><img src="{{ 'http://127.0.0.1:8080/api/displayimage/'.$new->image }}" class="d-block w-100" alt="..."></a>
            <div class="carousel-caption d-none d-md-block">
              <h1>{{ $new->titre }}</h1>
              <h3>{{ $new->description }}</h3>
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

      <div class="text-center mssg" id="mssg">
        <form  style="max-width:500px;margin:auto;" method="POST" action="{{ url('message') }}" enctype="multipart/form-data">
            @csrf
          <h1 class="h3 mb-3 font-weight-normal">{{ __('index.10') }}</h1>
          <input type="email" id="emailAddress" class="form-control mb-3" placeholder="{{ __('index.12') }}" required name="email" >
          <input type="text" id="Passwors" class="form-control mb-3" placeholder="{{ __('index.13') }}" required name="nom">
          <textarea class="form-control mb-3" placeholder="{{ __('index.14') }}" id="floatingTextarea" style="height: 150px" name="text"></textarea>
          <div class="d-grid gap-2">
            <input type="submit" class="btn btn-primary">
          </div>
        </form>
      </div>

      <div class="" style="background-color: #19283f;color:#fff;">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top" style="background-color: #19283f;color:#fff;">
          <div class="col-md-4 d-flex text-center" style="background-color: #19283f;color:#fff;">
            <span class="ps-5" style="background-color: #19283f;color:#fff;">{{ __('index.15') }}</span>
          </div>
          <div class="col-md-4 d-flex align-items-center text-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-decoration-none "style="background-color: #19283f;color:#fff;">
                {{ __('index.3') }}
            </a>
          </div>

          <ul class="nav col-md-4 d-flex text-center"style="background-color: #19283f;color:#fff;" >
            <li class="ms-3 ps-5"><a class="" style="background-color: #19283f;color:#fff;"href="#"><i class="fa-solid fa-location-dot"></i></a></li>
            {{-- <li class="ms-3 ps-5"><a class="" style="background-color: #19283f;color:#fff;"href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="ms-3 ps-5"><a class=""style="background-color: #19283f;color:#fff;" href="#"><i class="fab fa-facebook"></i></a></li> --}}
          </ul>
        </footer>
      </div>



@endsection
