@extends('layouts.main_layout')

@section('content')
	<div class="container">
		<h1>{{$comic->title}}</h1>
		<div class="row">
			<figure class="w-50">
				<img class="w-100" src="{{$comic->thumb}}" alt="" class="img-fluid">
			</figure>
			<div class="details w-50">
				<h3>{{ $comic->series }}</h3>
				<p>
					{!! $comic->description !!}
				</p>

				<h4>
					sales date: {{$comic->sale_date}}
				</h4>
				<h5>
					{{$comic->price}}
				</h5>
			</div>
		</div>
	</div>
@endsection