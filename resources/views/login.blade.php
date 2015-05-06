@extends('app')

@section('content')
<div class="row" align="center">
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
				@if (!Auth::user())
					<a href="/test" class="btn btn-primary">Back </a>
				@else
					<a href="/logout">Logout</a>
				@endif
			</div>
		</div>
	</form>
</div>
@endsection