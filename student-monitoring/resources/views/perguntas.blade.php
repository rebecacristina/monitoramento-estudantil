@extends('layouts.app')

@section('content')
	<div class="container" >
		<label>cadastre sua pergunta</label>
		<form>
			<div class="form-group">
				<input class="form-control" type="text" name="pergunta">
				<select class="form-control" id="exampleFormControlSelect1" >
						<option>Selecione o tipo da sua pergunta</option>
					@foreach($tipoDePergunta as $tipo)
						<option value="{{ $tipo->id}}">{{$tipo->tipo}}</option>
					@endforeach
				</select>
				<input class="btn btn-primary" type="sumit" value="cadastre sua pergunta">
			</div>	
		</form>
	</div>	
@endsection