@extends('master.layout')

@section('css')
	<link rel="stylesheet" type="text/css" href="/css/sty.css">
	
  @if ( config('app.locale') == 'ar')
		<style type="text/css">
			input{
				text-align: right;
			}
            form{
                text-align: right;
            }


		</style>
    @endif
	
   @if ( config('app.locale') == 'fr')
		<style type="text/css">
			input{
				text-align: left;
			}
            form{
                text-align: left;
            }

		</style>
	@endif
  <link rel="icon" href="/images/royaumedumaroc.png">
@endsection

@section('titel')
	depot
@endsection

@section('body')
<script src="/js/ind2.js"></script>

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
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
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
            <a class="nav-link" href="/#mssg">{{ __('index.6') }}</a>
          </li>
        </ul>


        <form  class="d-flex me-3" role="search">
          <input class="form-control me-2" type="search" placeholder="{{ __('index.16') }}" aria-label="Search">
          <button class="btn bt" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        {{-- <a href="{{ url('depose/ar') }}"><button type="button" class="btn bt ar me-2 " >{{ __('index.20') }}</button></a>
        <a href="{{ url('depose/fr') }}"><button type="button" class="btn bt fr ">{{ __('index.21') }}</button></a> --}}
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
          {{-- <a href="{{ url('depose/ar') }}"><button type="button" class="btn bt ar me-2 " >{{ __('index.20') }}</button></a>
          <a href="{{ url('depose/fr') }}"><button type="button" class="btn bt fr ">{{ __('index.21') }}</button></a> --}}
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
          <li class="nav-item  pe-5 me-5">
            <a class="nav-link" href="{{ url('espase_Admin/ar') }}">{{ __('index.5') }}</a>
          </li>
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



<div style="min-height:90vh !important;">
	<form class="container" method="POST" action="{{url('save1')}}" enctype="multipart/form-data" style="max-width:55rem;margin:auto;">
		@csrf
        <div id="aaa1">
		<div class="form-row">
		<div class="col-md-12 mb-3 mt-5" >
		  <label class="mb-3">{{ __('service.depose.Nom') }}</label>
          <label class="mb-3 mt-3 l1 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
          <label class="mb-3 mt-3 l11 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Merci D'ecrire le nom correctement</label>
		  <input type="text" class="form-control in1" value="{{ $demande->nom }}"  name="nom" required>
      {{-- placeholder="{{ __('service.depose.Noma') }}" --}}
		</div>
		<div class="col-md-12 mb-3 " >
		  <label class="mb-3 mt-3">{{ __('service.depose.prenom') }}</label>
          <label class="mb-3 mt-3 l2 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
          <label class="mb-3 mt-3 l21 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Merci D'ecrire le nom correctement</label>
		  <input type="text" class="form-control in2" value="{{ $demande->prenom }}" name="prenom" required>
		</div>
		<div class="col-md-12 mb-3  ">
		  <label class="mb-3 mt-3">{{ __('service.depose.cin') }}</label>
		  <label class="mb-3 mt-3 l3 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
		  <div class="input-group">
		    <input type="text" class="form-control in3"  value="{{ $demande->cin }}" name="cin" aria-describedby="inputGroupPrepend3" required>
		  </div>
		</div>
		<div class="col-md-12 mb-3">
		  <label class="mb-3 mt-3">{{ __('service.depose.TP') }}</label>
          <label class="mb-3 mt-3 l4 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
		  <select class="form-select in4" id="inputGroupSelect01" name="type_demande">
            <option value="{{ $demande->type_demande }}">{{ $demande->type_demande }}</option>
            <option value="{{ __('service.depose.1') }}">{{ __('service.depose.1') }} </option>
            <option value="{{ __('service.depose.2') }}">{{ __('service.depose.2') }} </option>
    
      </select>
		</div>
		</div>
		<label class="mb-3 mt-3">{{ __('service.depose.3') }}</label><br>
        <label class="mb-3 mt-3 l5 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
		<div class="input-group form-row" >
		  {{-- <div class="input-group-prepend">
		    <span class="input-group-text " id="inputGroupFileAddon01">{{ __('service.depose.4') }}</span>
		  </div> --}}
		  <div class="custom-file">
		    <input type="file" class="custom-file-input btn btn-primary in5" name="cin_img"
		      aria-describedby="inputGroupFileAddon01" required >
		    {{-- <label class="custom-file-label" for="inputGroupFile01">{{ __('service.depose.5') }} </label> --}}
		  </div>
		</div><br><br>


		<label class="mb-3 mt-3">{{ __('service.depose.6') }}</label><br>
        <label class="mb-3 mt-3 l6 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
		<div class="input-group form-row">
		  {{-- <div class="input-group-prepend">
		    <span class="input-group-text mb-5" id="inputGroupFileAddon01">{{ __('service.depose.7') }} </span>
		  </div> --}}
		  <div class="custom-file">
		    <input type="file" class="custom-file-input btn btn-primary in6" name="demande" id="inputGroupFile01"
		      aria-describedby="inputGroupFileAddon01" required>
		    {{-- <label class="custom-file-label" for="inputGroupFile01">{{ __('service.depose.8') }} </label> --}}
		  </div>

		</div><br><br>
        <div class="text-center ">
            <button type="button" class="btn btn-secondary me-5 " disabled>Preced</button>
            <button class="btn btn-primary ms-5 s1" type="button">Suivant</button>
        </div>
    </div>
    
    <div id="aaa2">
        <div class="form-row">
            <div class="col-md-12 mb-3 mt-5" >
              <label class="mb-3">{{ __('service.depose.9') }} </label>
              <label class="mb-3 mt-3 l7 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
              <label class="mb-3 mt-3 l71 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Merci D'ecrire le nom correctement</label>
              <input type="text" class="form-control in7" value="{{ $demande->nom_batimant }}" name="nom_batimant" required>
            </div>
            <div class="col-md-12 mb-3 " >
              <label class="mb-3 mt-3">{{ __('service.depose.25') }}</label>
              <label class="mb-3 mt-3 l8 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
              <label class="mb-3 mt-3 l81 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Merci D'ecrire le nom correctement</label>
              <input type="text" class="form-control in8"  value="{{ $demande->daaira }}" name="daaira" required>
            </div>
            <div class="col-md-12 mb-3 ">
              <label class="mb-3 mt-3">{{ __('service.depose.26') }}</label>
              <label class="mb-3 mt-3 l9 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
              <label class="mb-3 mt-3 l91 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Merci D'ecrire le nom correctement</label>
              <div class="input-group">
                <input type="text" class="form-control in9" value="{{ $demande->province }}" name="province" aria-describedby="inputGroupPrepend3" required>
              </div>
            </div>
            <div class="col-md-12 mb-3 ">
              <label class="mb-3 mt-3">{{ __('service.depose.12') }}</label>
              <label class="mb-3 mt-3 l10 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
              <label class="mb-3 mt-3 l101 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Merci D'ecrire le nom correctement</label>
              <div class="input-group">
                <input type="text" class="form-control in10" value="{{ $demande->douar }}" name="douar" aria-describedby="inputGroupPrepend3" required>
              </div>
            </div>
            <div class="col-md-12 mb-3 ">
              <label class="mb-3 mt-3">{{ __('service.depose.13') }}</label>
              <label class="mb-3 mt-3 l11 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
              <label class="mb-3 mt-3 l111 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Merci D'ecrire le nom correctement</label>
              <div class="input-group">
                <input type="text" class="form-control in11"  value="{{ $demande->commune }}" name="commune" aria-describedby="inputGroupPrepend3" required>
              </div>
            </div>
            <div class="col-md-12 mb-3 ">
              <label class="mb-3 mt-3">{{ __('service.depose.14') }}</label>
              <label class="mb-3 mt-3 l12 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
              <label class="mb-3 mt-3 l121 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Merci D'ecrire le nom correctement</label>
              <div class="input-group">
                <input type="text" class="form-control in12"  value="{{ $demande->qiyada }}" name="qiyada" aria-describedby="inputGroupPrepend3" required>
              </div>
            </div>
            </div>
            <label class="mb-3 mt-3 dd">{{ __('service.depose.15') }} </label><br>
            <label class="mb-3 mt-3 l13 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
            <div class="input-group form-row" >
              <div class="input-group-prepend">
                {{-- <span class="input-group-text " id="inputGroupFileAddon01">{{ __('service.depose.16') }}</span> --}}
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input btn btn-primary in13" name="tasmime_3a9are"
                  aria-describedby="inputGroupFileAddon01" required >
                {{-- <label class="custom-file-label" for="inputGroupFile01">{{ __('service.depose.17') }} </label> --}}
              </div>
            </div><br><br>


            <label class="mb-3 mt-3 dd">{{ __('service.depose.18') }}</label><br>
            <label class="mb-3 mt-3 l14 text-center" style="color: #fff;background-color:red;border-radius:6px;padding:px;display:none;">Ce champ est Obligatoire !!!!</label>
            <div class="input-group form-row">
              <div class="input-group-prepend">
                {{-- <span class="input-group-text mb-5" id="inputGroupFileAddon01">{{ __('service.depose.19') }} </span> --}}
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input btn btn-primary in14" name="milkiyate_3a9ar" id="inputGroupFile01"
                  aria-describedby="inputGroupFileAddon01" required>
                {{-- <label class="custom-file-label" for="inputGroupFile01">{{ __('service.depose.20') }} </label> --}}
              </div>
            </div><br><br>
            <div class="text-center ">
                <button class="btn btn-primary me-5 s2" type="button">Preced</button>
                <button class="btn btn-primary ms-5 s3" type="button">Suivant</button>
            </div>

    </div>
    <div id="aaa3">
        <div class="form-row">
            <div class="col-md-12 mb-3 ">
              <label class="mb-3 mt-3">{{ __('service.depose.21') }}</label>
              <div class="input-group">
                <input type="text" class="form-control " value="{{$demande->localisationPointDeau}}" name="localisationPointDeau" aria-describedby="inputGroupPrepend3" >
              </div>
            </div>
            <div class="col-md-12 mb-3 ">
              <label class="mb-3 mt-3">{{ __('service.depose.22') }}</label>
              <div class="input-group">
                <input type="number" lang="fr" class="form-control" value="{{$demande->profendeur}}" name="profendeur" aria-describedby="inputGroupPrepend3" >
              </div>
            </div>

            <div class="col-md-12 mb-3 ">
              <label class="mb-3 mt-3">{{ __('service.depose.23') }}</label>
              <div class="input-group">
                <input type="number" lang="fr" class="form-control" value="{{$demande->debit}}" name="debit" aria-describedby="inputGroupPrepend3">
              </div>
            </div>

            <div class="col-md-12 mb-3 ">
              <label class="mb-3 mt-3">{{ __('service.depose.24') }}</label>
              <div class="input-group">
                <input type="number" class="form-control " lang="fr" value="{{$demande->plan_Deau}}" name="plan_Deau" aria-describedby="inputGroupPrepend3">
              </div>
            </div>

            </div>
            <input type="number"  name="id" value="{{$demande->id}}" style=" display: none;" >
		        <input type="submit" class="form-control btn btn-primary" value="{{ __('service.depose.Env') }}" name="sub" onsubmit="return false">
            <div class="text-center mt-5">
                <button class="btn btn-primary me-5 s4" type="button">Preced</button>
                <button class="btn btn-secondary ms-5"disabled type="button">Suivant</button>
            </div>
    </div>
    </form>

    {{-- <nav aria-label="Page navigation example" style="cursor: pointer">
        <ul class="pagination justify-content-center mt-5">
          {{-- <li class="page-item disabled" >
            <a class="page-link" id="pp">Previous</a>
          </li> --}}
          {{-- <li class="page-item active" id="q1"><a class="page-link" >1</a></li>
          <li class="page-item " id="q2"><a class="page-link" >2</a></li>
          <li class="page-item" id="q3"><a class="page-link" >3</a></li> --}}
          {{-- <li class="page-item " id="qqqq">
            <a class="page-link " id="qq">Next</a>
          </li> --}}
        {{-- </ul>
      </nav> --}}  
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
