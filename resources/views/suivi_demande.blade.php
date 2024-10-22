@extends('master.layout')

@section('css')
	<link rel="stylesheet" type="text/css" href="/css/sty.css">
    <link rel="icon" href="/images/royaumedumaroc.png">
@endsection
@section('titel')
	Suivi
@endsection

@section('body')
@if(config('app.locale') == 'ar')
<style>
  .text-align{
     text-align:right !important;
  }
  .drc{
      direction: rtl;
  }
</style>
@else
<style>
  .text-align{
     text-align:left !important;
  }
  .drc{
      direction: ltr;
  }
</style>
@endif
<nav class="navbar  nv1 navbar-expand-lg">
    <div class="container">
      <a class="navbar" href="{{ url('/') }}">
        <img src="/images/royaumedumaroc.png" alt="" width="100" height="100">
      </a>
      <div style="text-align:center;">
        <h3>{{ __('index.2') }}</h3>
      </div>
      <a class="navbar" href="{{ url('/') }}">
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
        {{-- <a href="{{ url('ar') }}"><button type="button" class="btn bt ar me-2 " >{{ __('index.20') }}</button></a>
        <a href="{{ url('fr') }}"><button type="button" class="btn bt fr ">{{ __('index.21') }}</button></a> --}}
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
          {{-- <a href="{{ url('ar') }}"><button type="button" class="btn bt ar me-2 " >{{ __('index.20') }}</button></a>
          <a href="{{ url('fr') }}"><button type="button" class="btn bt fr ">{{ __('index.21') }}</button></a> --}}
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

	<div class=" container text-center" style="min-height:90vh !important;">
        @if ( config('app.locale') == 'ar')
		<h1 style="margin-top: 50px"> {{ $demande->nom}} {{ $demande->prenom}} {{ __('index.30') }}</h1><br><br><br>
        @else
		<h1 style="margin-top: 50px ;"> {{ __('index.30') }} {{ $demande->nom}} {{ $demande->prenom}}</h1><br><br><br>
        @endif

	    @if ($demande->is_completed === "true" and  $demande->is_valide === "null")
        <h1 class="text-primary pb-3 mb-5">
            {{ __('index.60') }}
        </h1>

        <div>
              <a href="{{route('Pdfa',['id'=>$demande->id])}}" class="btn btn-primary mb-3 text-center"><i class="fa-solid fa-file-arrow-down"></i> Telecheger</a>
        </div>

		@elseif ($demande->is_completed === "null")
        
        <h1 class=" pb-3 mb-5" style="color: gray">
            {{ __('index.61') }}
        </h1>

        @elseif ( $demande->is_completed === "false" and $demande->is_valide === "null")
             <h1 class=" pb-3" style="color: red">
                {{ __('index.62') }}
              </h1>            
              <div class="container text-align d-flex justify-content-center">
                <div class="alert alert-danger px-5">
                  <h4>{{__('message.1')}}</h4>
                  <?php
                    $message=$demande->Message;
                    $tab=explode(",",$message); 
                 ?>
                <ul class="drc">
                  @if($tab[0]=="1")
                  <li>{{__('message.2')}}</li>
                  @endif
                @if($tab[1]=="1")
                  <li>{{__('message.3')}}</li>
                @endif
                @if($tab[2]=="1")
                  <li>{{__('message.4')}}</li>
                @endif
                @if($tab[3]=="1")
                  <li>{{__('message.5')}}</li>
                  @endif
                @if($tab[4]!="0")
                  <li>{{ $tab[4] }}</li>
                  @endif
                </ul>
            </div>
          </div>
            
           @if ( config('app.locale') == 'ar')
            <form method="POST" action="{{url('/chf/ar')}}">
              @csrf
                <input type="number"  name="id" value="{{ $demande->id }}" style="display: none;">
                <button type="submit" name="sub" class="btn btn-primary"> {{ __('index.100') }}</button>
            </form>
            @else
            <form method="POST" action="{{url('/chf/fr')}}">
                @csrf
                <input type="number"  name="id" value="{{ $demande->id }}" style=" display: none;"  >
                <button type="submit" name="sub" class="btn btn-primary mb-4"  >{{ __('index.100') }}</button>
            </form>
            @endif

        @elseif ( $demande->is_valide === "true")
            
            <h1 class=" pb-3  mb-5" style="color: green">
                {{ __('index.63') }}
            </h1>
            <form method="post" action="{{ url('Pdfim') }}">
                @csrf
                <input type="hidden"  name="id" value="{{ $demande->id }}">
                <button type="submit" class="btn btn-primary mb-3 text-center">{{ __('index.23') }}</button>
            </form>

	   	@elseif( $demande->is_valide === "false")
       
         <h1 class=" pb-3  mb-5" style="color: red">
            {{ __('index.64') }}
         </h1>

		@endif
        @if ( config('app.locale') == 'ar')
           <a href="{{url('/ar')}}"><button class="btn btn-primary mt-3 text-center">{{ __('index.22') }}</button></a>
        @else
           <a href="{{url('/fr')}}"><button class="btn btn-primary mt-3 text-center">{{ __('index.22') }}</button></a>
        @endif
	</div>


    <div class="" style="background-color: #19283f;color:#fff;">
      
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top" style="background-color: #19283f;color:#fff;margin-top: 1em;">
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
            <li class="ms-3 ps-5"><a class="" style="background-color: #19283f;color:#fff;"href="#"><i class="fab fa-facebook"></i></a></li>
          </ul>
        </footer>
      </div>
@endsection
