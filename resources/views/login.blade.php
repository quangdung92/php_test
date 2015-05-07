@extends('app')

@section('content')
<div class="row" align="center">
	@if (Auth::user())
	<h2>You have logged in!Please logout <a href="/logout"> Logout</a></h2>
	@else
	<form class="form-horizontal" role="form" method="POST" action="check" >
		<h2>Login!</h2>
		<p>
			{{ Session::get('msg') }}
		</p>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
			<div class="small-4 small-centered columns">
				<label>Email</label>
			</div>
			<div class="small-4 small-centered columns">
				<input type="text" class="form-control" name="email" >
			</div>
		</div>
		<br />
		<div class="row">
			<div class="small-4 small-centered columns">
				<label>Password</label>
			</div>
			<div class="small-4 small-centered columns">
				<input type="password" class="form-control" name="pass" >
			</div>
		</div>
		<br />
		<div class="row">
			<div class="small-4 small-centered columns">
				<button type="submit" class="btn btn-primary">
					Login
				</button>
				<a href="/test" class="btn btn-primary">Back </a>
			</div>
		</div>
	</form>
	@endif
</div>
@endsection