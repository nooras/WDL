@extends('template')
@section('title','Gallery')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
	<main>
	<h1>GALLERY</h1>
		<figure>
			<figcaption>Flowers</figcaption>
			<img src ="{{asset('img/index.jpg')}}" alt="abc" >
			<img src="{{asset('img/index2.jpg')}}" alt="abc">
			<img src="{{asset('img/index3.jpg')}}" alt="abc" >
			
		</figure>
	</main>

@endsection

@section('footer')
  @include('partials.footer')
@endsection