@extends('layote.nav_admin')
<link rel="icon" href="/images/royaumedumaroc.png">

@section('content')
	<table class="container table table-striped">
		<tr class="border">
			<th class="border" >{{ __('admin.nom') }}</th>
			<th class="border" >{{ __('admin.prenom') }}</th>
			<th class="border" >{{ __('admin.cin') }}</th>
			<th class="border" >{{ __('admin.nd') }}</th>
			<th class="border" >{{ __('admin.action') }}</th>
		</tr>
		@foreach ($demandes as $demande)
	    	@if ( $demande->etat_demande == "pas encore")
		    	<tr>
					<td class="border" >{{ $demande->nom }}</td>
					<td class="border" >{{ $demande->prenom }}</td>
					<td class="border" >{{ $demande->cin }}</td>
                    <td class="border" >{{ $demande->id }}</td>
					<td class="border" >

						<form method="POST" action="{{ url('view') }}">
							@csrf
							<input type="number"  name="id" value="{{ $demande->id }}" style=" display: none;"  >
							<input type="submit" name="sub" class="input" style="background-color: blue; color :white;"  value="{{ __('admin.affiche') }}">
						</form>
					</td>
			    </tr>
	    	@endif
		@endforeach

	</table>

    <h4 class="text-center mt-5">{{ __('admin.ajoute') }}</h4>
	<form class="container input-group mb-5 justify-content-center" id="addnew" method="POST" action="{{ url('add') }}" enctype="multipart/form-data">
		@csrf
		@if ( config('app.locale') == 'ar')
			<div class=" input-group col-5 mt-4 d-flex flex-row-reverse " >
				<label class="filebutton mx-3">
					<i class="bi bi-plus-square-fill " style="font-size: 3rem; color: cornflowerblue;"></i>
					<span><input  type="file" id="myfile" name="myfile"></span>
				</label>
				<div id="div" class="font-italic mx-3 pt-4" style="font-size: 1rem;">{{ __('admin.chose') }}</div>
			</div>
			<div class=" input-group col-4 mt-5 " >
				<input class="form-control text-right" type="text" name="titre" placeholder="{{ __('admin.titre') }}">
			</div>
			<div class="input-group col-9 mt-5">
				<textarea class="form-control text-right" placeholder="{{ __('admin.description') }}" name="des"></textarea>
			</div>
		@else
			<div class=" input-group col-4 mt-5 " >
				<input class="form-control text-left" type="text" name="titre" placeholder="{{ __('admin.titre') }}">
			</div>
			<div class=" input-group col-5 mt-4 d-flex" >
				<label class="filebutton mx-3">
					<i class="bi bi-plus-square-fill " style="font-size: 3rem; color: cornflowerblue;"></i>
					<span><input  type="file" id="myfile" name="myfile"></span>
				</label>
				<div id="div" class="font-italic mx-3 pt-4" style="font-size: 1rem;">{{ __('admin.chose') }}</div>
			</div>
			<div class="input-group col-9 mt-5">
				<textarea class="form-control" placeholder="{{ __('admin.description') }}" name="des"></textarea>
			</div>
		@endif
		<div class="input-group col-4 mt-5">
			<input class="form-control bg-primary" type="submit" name="sub" value="{{ __('service.depose.Env') }}">
		</div>
	</form>
@endsection

