@extends('app')

@section('content')
<div class="row" align="center">
	<form class="form-horizontal" role="form" method="POST" action="test/register" >
		<h2>Register!</h2>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<p>
			{{ Session::get('msg') }}
		</p>
		<div class="row">
			<div class="small-4 small-centered columns">
				<label>UserName</label>
			</div>
			<div class="small-4 small-centered columns">
				<input type="text" class="form-control" name="name" >
			</div>
		</div>
		<br />
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
					Register
				</button>
				<a href="/log_in"> Login </a>
			</div>
		</div>
	</form>
</div>
@endsection