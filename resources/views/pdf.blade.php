@extends('master.layout')
@section('css/')
	<link rel="stylesheet" type="text/css" href="css/sty.css">
  <link rel="icon" href="/images/royaumedumaroc.png">
@endsection

@section('titel')
	laravel
@endsection
@section('body')
<script src="/js/ind3.js"></script>
<div class="pp text-center m-5" id="id" >
<nav class="navbar  nv1 navbar-expand-lg">
    <div class="container">
      <a class="navbar" href="#">
        <img src="/images/royaumedumaroc.png" alt="" width="100" height="100">
      </a>
      <div style="text-align:center;">
        <h2 >ROYAUME DU MAROC</h2>
        <br>
        <h3>Ministère de l’Equipement et de l’eau</h3>
      </div>
      <a class="navbar" href="#">
        <img src="/images/gtt.jpg" alt="" width="100" height="100">
      </a>
    </div>
  </nav>


        <h1>{{ $demande->id }} : رقم الملف </h1>
		<div class="head">
			<h3>المملكة المغربية </h3>
			<h3>وزارة التجهيز و النقل و اللوجيستيك و الماء </h3>
			<h3>المديرية الٍاقليمية للتجهيز و النقل و اللوجيستيك و الماء باً سفي</h3>
			<h3>المصلحة الاٍقليمية للماء باًسفي</h3><br>
		</div><br>

		{{-- <div class="text-center">
			<h4>{{ $demande->nom }} {{ $demande->prenom }}    لقد تم ارسال طلبكم  </h4>
			<h4>{{ $demande->cin }} :   حامل  للبطاقة  الوطنية </h4>
			<h4>{{ $demande->created_at }} :  قد وضع  لذا هذه  المصلحة بتاريخ  </h4>

		</div> --}}
        <h3> لقد تم ارسال طلبكم  </h3>
        <h3> {{ $demande->id }} :يمكنكم استعمال رقم ملفكم </h3>
        <h3> {{ $demande->cin }} : و رقم بطاقتكم لتتبع طلبكم </h3>
		{{-- <p class="Nb">ملحوضة : هذا الوصل يثبت فقط إيداع ملف الترخيص لايمكن اعتباره ترخيصا بحفر اًو جلب ماء</p> --}}

    </div>
    <div class="container text-center">
    {{-- @if ( config('app.locale') == 'ar')
    <button onclick="telecharge()" style="background-color: green; color: white; margin-left: 30px; " class="btn btn-primary mb-3 text-center">{{ __('index.23') }}</button>
    @else
    <button onclick="telecharge()" style="background-color: green; color: white; margin-left: 30px; " class="btn btn-primary mb-3 text-center">{{ __('index.23') }}</button>
    @endif --}}
    @if ( config('app.locale') == 'ar')
    <a href="{{url('/ar')}}"><button class="btn btn-primary mb-3 text-center">{{ __('index.22') }}</button></a>
    @else
    <a href="{{url('/fr')}}"><button class="btn btn-primary mb-3 text-center">{{ __('index.22') }}</button></a>
    @endif
    </div>
    {{-- <script type="text/javascript">
    	function  telecharge() {
    		var div = document.getElementById("id") ;
    		html2pdf().from(div).save();
    	}
    </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
@endsection
