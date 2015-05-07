<?php
	$user = Auth::user()
?>
@extends('app')

@section('content')
{{ Session::get('msg') }}
<div class="row" align="center">
	<form action="post/status" class="form-horizontal" method="POST">
		<h2>{{ $title }} </h2>
		<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
		<div class="small-4 small-centered columns">
			<textarea name="status">
		  	</textarea>
		</div>
		<div class="row">
			<div class="small-4 small-centered columns">
				<button type="submit" class="btn btn-primary">
					Post
				</button>
			</div>
		</div>
	</form>
	<div class="row" align="center" style="margin-top: 20px">
		<div class="small-4 small-centered columns">
			<ul class="pricing-table">
				<li class="title">
					Post
				</li>
				@foreach ($posts as $post)
				<li class="description">
					{{ $post->status }}
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection