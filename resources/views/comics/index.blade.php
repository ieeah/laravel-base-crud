@extends('layouts.main_layout')

@section('content')
	<div class="container">
		<h1>comics page</h1>

	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Description</th>
				<th>Thumb</th>
				<th>Price</th>
				<th>Series</th>
				<th>Sale date</th>
				<th>Type</th>

				<th colspan="3">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($comics as $comic)
			<tr>
				<td><strong>{{$comic->id}}</strong></td>
				<td>{{$comic->title}}</td>
				<td>{{Str::limit( $comic->description , 120, ' ...')}}</td>
				<td>{{$comic->thumb}}</td>
				<td>{{$comic->price}}</td>
				<td>{{$comic->series}}</td>
				<td>{{$comic->type}}</td>
				<td>
					<a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">SHOW</a>
				</td>
				<td>Edit</td>
				<td>delete</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
@endsection