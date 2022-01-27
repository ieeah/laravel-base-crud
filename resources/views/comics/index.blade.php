@extends('layouts.main_layout')

@section('content')
	<div class="index_main container">
		<h1>comics page</h1>
		
		@if (session('deleted'))
			<div class="alert alert-success">
				<strong>{{session('deleted')}}</strong>
				succesfully deleted.
			</div>
		@endif
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
				<td>{{Str::limit( $comic->description , 30, ' ...')}}</td>
				<td>{{$comic->thumb}}</td>
				<td>{{$comic->price}}</td>
				<td>{{$comic->series}}</td>
				<td>{{$comic->type}}</td>
				<td>
					<a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">SHOW</a>
				</td>
				<td><a class="btn btn-success" href="{{ route('comics.edit', $comic->id) }}">EDIT</a></td>
				<td>
					<form action="{{ route('comics.destroy', $comic->id) }}" method="post">
						@csrf @method('DELETE')
						<input class="btn btn-danger" type="submit" value="DELETE">
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{$comics->links()}}
	</div>
@endsection