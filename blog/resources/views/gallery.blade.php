@extends('template')
@section('title','Gallery Page')

@section('navbar')
	@include('partials.navbar')
@endsection

@section('content')
	<main>
		<div class="gallery">
			<h1>Gallery</h1>
			<figure>
				<figcaption>sea</figcaption>
				<img src="{{assets('img/1.jpg')}}" alt="sea">
			</figure>
			<figure>
				<figcaption>land</figcaption>
				<img src="{{assets('img/2.jpg')}}" alt="image">
			</figure>
			<figure>
				<figcaption>mountain</figcaption>
				<img src="{{assets('img/3.jpg')}}" alt="image">
			</figure>
			<figure>
				<figcaption>green house</figcaption>
				<img src="{{assets('img/5.jpg')}}" alt="image">
			</figure>
			<figure>
				<figcaption>paris</figcaption>
				<img src="{{assets('img/6.jpg')}}"  alt="image">
			</figure>
		</div>
	</main>
@endsection


@section('footer')
	@include('partials.footer')
@endsection
