@extends('layouts.app')

@section('content')
	<div class="container" >
		<label>cadastre sua pergunta</label>
		<form>
			<div class="form-group">
				<input class="form-control" type="text" name="pergunta">
				<input class="btn btn-primary" type="sumit" value="cadastre sua pergunta">
			</div>	
		</form>
	</div>	
@endsection