@extends('template')
@section('title','Home Page')

@section('navbar')
	@include('partials.navbar')
@endsection

@section('content')
	<main>
		<div class="pic">
			<figure><img src="img/nf.jpg"></figure>
		  <h1>Nooras Fatima</h1>
		</div>
		<div>
			<p class="d">
		  	Hello Everyone!!<br>
				My name is Ansari Nooras Fatima.<br>
		  	I am Student of AIKTC.<br>
				I am studing in Computer Engineering.<br>
		  	Beginner at web Development.
		  </p>
		</div>
		<div>
			<a href="resume.htm">More About Me</a>
		</div>
		<div>
			<a href="contact.htm">Contact</a>
		</div>
		<div>
			<a href="blog.htm">Blog</a>
		</div>
	</main>
@endsection


@section('footer')
	@include('partials.footer')
@endsection