@extends('template')
@section('title','Contact')

@section('navbar')
	@include('partials.navbar')
@endsection

@section('content')
	<main>
		<div class="contact-form" id="contacts">
			<h3>Contact Me</h3>
			<form action="" method="post">
				<label>
					<div>
						Email:
					</div>
					<input id="user-email" type="email" name="useremail" placeholder="usernamer@name.com" required>
				</label>
				<label>
					<div>
						Subject:
					</div>
					<input id="subject" type="text" name="subject" placeholder="your subject">
				</label>
				<label>
					<div>
						Massege:
					</div>
					<textarea id="message"name="message"></textarea>
				</label>
				<div>
					<input id="submit-btn" type="submit" value="submit"/>
				</div>
			</form>
		</div>
			<div class="social-media">
				<h3>Get Connected</h3>
				<a href="https://facebook.com"><i class="fab fa-facebook"></i>FaceBook</a>
				<a href="https://github.com"><i class="fab fa-github"></i>Github</a>
				<a href="https://stackoverflow.com"><i class="fab fa-stack-overflow"></i>Stackoverflow</a>
				<a href="https://twitter.com"><i class="fab fa-twitter-square"></i>twitter</a>
			</div>
	</main>
@endsection


@section('footer')
	@include('partials.footer')
@endsection
