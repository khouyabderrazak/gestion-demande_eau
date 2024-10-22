@extends('master.layout')

@section('css')
	<link rel="stylesheet" type="text/css" href="/css/sty.css">
	@if ( config('app.locale') == 'ar')
		<style type="text/css">
			input{
				text-align: right;
			}

		</style>
	@endif
    <link rel="icon" href="/images/royaumedumaroc.png">
@endsection

@section('titel')
	suivi
@endsection

@section('body')

<nav class="navbar  nv1 navbar-expand-lg">
    <div class="container">
        @if ( config('app.locale') == 'ar')
      <a class="navbar" href="{{ url('/ar') }}">
        @else
      <a class="navbar" href="{{ url('/fr') }}">
        @endif
        <img src="/images/royaumedumaroc.png" alt="" width="100" height="100">
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
            <a class="nav-link " aria-current="page" href="{{ url('/fr') }}">{{ __('index.4') }}</a>
          </li>
          
          <li class="nav-item dropdown pe-5 me-5 ">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ __('index.7') }}
            </a>
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ url('suivi/fr') }}">{{ __('index.8') }}</a></li>
              <li><a class="dropdown-item" href="{{ url('depose/fr') }}">{{ __('index.9') }}</a></li>
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
        <a href="{{ url('suivi/ar') }}"><button type="button" class="btn bt ar me-2 " >{{ __('index.20') }}</button></a>
        <a href="{{ url('suivi/fr') }}"><button type="button" class="btn bt fr ">{{ __('index.21') }}</button></a>
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
          <a href="{{ url('suivi/ar') }}"><button type="button" class="btn bt ar me-2 " >{{ __('index.20') }}</button></a>
          <a href="{{ url('suivi/fr') }}"><button type="button" class="btn bt fr ">{{ __('index.21') }}</button></a>
        <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item pe-5 me-5">
            <a class="nav-link active" aria-current="page" href="{{ url('/ar') }}">{{ __('index.4') }}</a>
          </li> --}}
          {{-- <li class="nav-item dropdown pe-5 me-5 ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ __('index.7') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ url('suivi/ar') }}">{{ __('index.8') }}</a></li>
              <li><a class="dropdown-item" href="{{ url('depose/ar') }}">{{ __('index.9') }}</a></li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item dropdown pe-5 me-5 ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ __('index.37') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ url('suivi/ar') }}">{{ __('index.34') }}</a></li>
              <li><a class="dropdown-item" href="{{ url('depose/ar') }}">{{ __('index.35') }}</a></li>
              <li><a class="dropdown-item" href="{{ url('depose/ar') }}">{{ __('index.36') }}</a></li>
            </ul>
          </li> --}}
          {{-- <li class="nav-item  pe-5 me-5">
            <a class="nav-link" href="{{ url('espase_Admin/ar') }}">{{ __('index.5') }}</a>
          </li> --}}
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


        {{-- <form  class="d-flex me-3" role="search">
          <input class="form-control me-2" type="search" placeholder="{{ __('index.16') }}" aria-label="Search">
          <button class="btn bt" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <a href="{{ url('ar') }}"><button type="button" class="btn bt ar me-2 " >{{ __('index.20') }}</button></a>
        <a href="{{ url('fr') }}"><button type="button" class="btn bt fr ">{{ __('index.21') }}</button></a> --}}
      </div>
    </div>
  </nav>
  @endif

  <div style="min-height:90vh !important;padding:0 20px;">

    <div class="form text-center" style="max-width: 50rem; margin:auto;margin-top:10rem;margin-bottom:10rem;">
      <form action="{{ config('app.locale') == 'fr' ? url('suivi_demande/fr') : url('suivi_demande/ar') }}" method="POST">
        @csrf
		  	<label style="margin-bottom: 20px;">{{ __('service.suivi.Nemero') }}</label>
			  <input type="text" class="form-control " style="margin-bottom: 20px;" placeholder="{{ __('service.suivi.Nemero') }}" name="id" required>
			  <label style="margin-bottom: 20px;" >{{ __('service.suivi.code') }}</label>
			  <input type="text" class="form-control " style="margin-bottom: 20px;" placeholder="{{ __('service.suivi.code') }}" name="code" required>
        <input type="submit" class="form-control btn btn-primary" value="{{ __('service.suivi.connexion') }}" name="sub" >
	    </form>
      
    </div>
  
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
            <li class="ms-3 ps-5"><a class="" style="background-color: #19283f;color:#fff;"href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="ms-3 ps-5"><a class="" style="background-color: #19283f;color:#fff;"href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="ms-3 ps-5"><a class=""style="background-color: #19283f;color:#fff;" href="#"><i class="fab fa-facebook"></i></a></li>
          </ul>
        </footer>
      </div>
@endsection
