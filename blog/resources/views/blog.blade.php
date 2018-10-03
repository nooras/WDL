@extends('template')
@section('title','My blog')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
   <article class="container panel panel-default">
		<div class="panel-heading">Hello World!</div>
		<header class="panel-body">
			<div>
				<span>Posted on</span> 
				<a href="#">June 20, 2008</a>
			</div>
			<h3 class="entry-title">
				<a href="#">Hello World</a>
			</h3>	
		</header>

	
		<div class="panel-body">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis veritatis soluta nisi, molestias explicabo dolorum iure nesciunt porro esse! Eveniet, magni corporis unde excepturi dolorum, veritatis! Possimus quidem totam architecto! </p>
		</div>

	
	</article>
@endsection

@section('footer')
	@include('partials.footer')
@endsection	