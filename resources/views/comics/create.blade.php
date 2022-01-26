@extends('layouts.main_layout')

@section('content')
	<div class="container">
		<h1>
			Inserisci nuovo fumetto a DB
		</h1>
		<form class="flex-column" action="{{route('comics.store')}}" method="post">
		@csrf

		<div class="mb-3">
			<label for="title">Title</label>
			<input class="col-md-12  form-control" type="text" name="title" id="title">
		</div>
		<div class="mb-3">
			<label for="description">Description</label>
			<textarea class="col-md-12 form-control" name="description" id="description" cols="30" rows="10"></textarea>
		</div>
		<div class="mb-3">
			<label for="thumb">Url immagine</label>
			<input class="col-md-12 form-control" type="text" name="thumb" id="thumb">
		</div>
		<div class="mb-3">
			<label for="price">Prezzo di vendita</label>
			<input class="col-md-12 form-control" type="number" name="price" id="price" placeholder="2.99" step="0.01">
		</div>
		<div class="mb-3">
			<label for="series">Serie</label>
			<input class="col-md-12 form-control" type="text" name="series" id="series">
		</div>
		<div class="mb-3">
			<label for="sale_data">Data di vendita</label>
			<input class="col-md-12 form-control" type="date" name="sale_data" id="sale_data">
		</div>
		<div class="mb-3">
			<label for="type">Tipo di fumetto</label>
			<input class="col-md-12 form-control" type="text" name="type" id="type">
		</div>
		<div class="mb-3 d-flex flex-column">
			<input class="btn btn-success align-self-end" type="submit" value="Salva">
		</div>
		</form>
	</div>
@endsection