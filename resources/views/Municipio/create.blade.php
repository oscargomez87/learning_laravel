@extends('layouts.app')

@section('title', 'Creación de Municipio')

@section('title2', 'Nuevo Municipio')

@section('content')

	<div class="row" >
	<div class="col-sm">
		<div class="card" style="margin-top: 10px;">
			<div class="card-body">
				<form method="POST" action="/municipio" accept-charset="UTF-8" style="display:inline">
					@csrf			
					<div class="form-group">
						<label for="comuna">Municipio</label>
						<input type="text" class="form-control" name="muni_nomb" id="muni_nomb" aria-describedby="comunalHelp">
						<small id="municipioHelp" class="form-text text-muted">Nombre del municipio.</small>
					</div>
					<div class="form-group">
						<label for="departamento">Departamento</label>
						<select name='depa_codi' class = 'form-control'>
							<option value="">Seleccione uno ... </option>
							@foreach($departamentos as $departamento)
								<option value = '{{ $departamento->depa_codi }}'> {{ $departamento->depa_nomb }} </option>
							@endforeach
						</select>
					</div>
					<button type="submit" class="btn btn-primary btn-xs fa fa-save" style="margin-left: 10px"> Grabar </button>				
				</form>
				<a href="/municipio" class="btn btn-danger btn-xs fa fa-arrow-alt-circle-right" style="margin-left: 10px"> Cancelar </a>				
			</div>
		</div>
		</div>
	</div>
@endsection


