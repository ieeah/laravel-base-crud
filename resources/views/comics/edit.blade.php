@extends('layouts.main_layout')

@section('content')
	<div class="container">
		<h1>
			Edit {{$to_edit->title}}
		</h1>
		<form class="flex-column" action="{{route('comics.update', $to_edit->id)}}" method="post">
		@csrf
		@method('PATCH')

		<div class="mb-3">
			<label for="title">Title</label>
			<input class="col-md-12 form-control" type="text" name="title" id="title" value="{{ $to_edit->title }}">
		</div>
		<div class="mb-3">
			<label for="description">Description</label>
			<textarea class="col-md-12 form-control" name="description" id="description" cols="30" rows="10">{{ $to_edit->description }}</textarea>
		</div>
		<div class="mb-3">
			<label for="thumb">Url immagine</label>
			<input class="col-md-12 form-control" type="text" name="thumb" id="thumb" value="{{ $to_edit->thumb }}">
		</div>
		<div class="mb-3">
			<label for="price">Prezzo di vendita</label>
			<input class="col-md-12 form-control" type="number" name="price" id="price" placeholder="2.99" step="0.01" value="{{ $to_edit->price }}">
		</div>
		<div class="mb-3">
			<label for="series">Serie</label>
			<input class="col-md-12 form-control" type="text" name="series" id="series" value="{{ $to_edit->series }}">
		</div>
		<div class="mb-3">
			<label for="sale_date">Data di vendita</label>
			<input class="col-md-12 form-control" type="date" name="sale_date" id="sale_date" value="{{ $to_edit->sale_date }}">
		</div>
		<div class="mb-3">
			<label for="type">Tipo di fumetto</label>
			<input class="col-md-12 form-control" type="text" name="type" id="type" value="{{ $to_edit->type }}">
		</div>
		<div class="mb-3 d-flex flex-column">
			<input class="btn btn-success align-self-end" type="submit" value="Salva">
		</div>
		</form>
	</div>
@endsection