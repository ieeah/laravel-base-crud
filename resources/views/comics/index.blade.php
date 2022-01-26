@extends('layouts.main_layout')

@section('content')
	<h1>comics page</h1>

	<table>
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
				<td>{{$comic->id}}</td>
				<td>{{$comic->title}}</td>
				<td>{{Str::limit( $comic->description , 120, ' ...')}}</td>
				<td>{{$comic->thumb}}</td>
				<td>{{$comic->price}}</td>
				<td>{{$comic->series}}</td>
				<td>{{$comic->type}}</td>
				<td>show</td>
				<td>Edit</td>
				<td>delete</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection