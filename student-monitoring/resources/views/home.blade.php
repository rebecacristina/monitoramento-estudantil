@extends('layouts.app')

@section('content')

    <div class="container">
      <div class="row justify-content-center">
  @foreach($formulario as $form)
   
    <div class="card" style="width: 18rem;">
       <div class="card-header">{{$form->titulo}}</div>
        <img src="{{asset('img/form-icon-2.png')}}" alt="Ícone de Formulário" class="card-img-top" style="padding: 10px;">
        <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{route('form', $form->id)}}" class="btn btn-primary"> Go somewhere</a>
        </div>

    </div>
  @endforeach
@endsection
