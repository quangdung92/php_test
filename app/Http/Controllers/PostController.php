<?php namespace App\Http\Controllers;

use Auth;
use View;
use DB;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Post;

use Illuminate\Support\Facades\Request;
class PostController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$current_user = Auth::user();	
		$title = "Status Post";
		$posts = DB::table('posts')->where('user_id', '=', 1)->get();;
		return View::make('post')->with(array('title' => $title, 'posts' => $posts));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$current_user = Auth::user();
		Post::create([
			'user_id' => $current_user['id'],
			'status' => Request::get('status'),
		]);
		return redirect('post')->with('msg','Your post has been create!');
	}
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
