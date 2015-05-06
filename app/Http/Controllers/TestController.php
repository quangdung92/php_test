<?php namespace App\Http\Controllers;

use Auth;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Request;

class TestController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('test');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$all = 	Request::all();
		$rules = array(
			'name' => 'required|min:5',
			'email' => 'required|unique:users',
		);
		$vali = Validator::make($all, $rules);
		if ($vali->fails()) {
			return redirect('test')-> with('msg','Bad!');
		} else {
		User::create([
			'name' => Request::get('name'),
			'email' => Request::get('email'),
			'password' => bcrypt(Request::get('pass')),
		]);
		return redirect('test')-> with('msg','Working done!');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function log_in()
	{
		return view('login');
	}
	
	public function check()
	{
		$results = Auth::attempt([
			'email' => Request::get('email'),
			'password' => Request::get('pass'),
		]);
		if ($results){
			return redirect('post') -> with('msg','You have logged_in!');
		} else {
			return redirect('log_in') -> with('msg','User does not exist!');
		}
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
	public function destroy()
	{
		Auth::logout();
		return redirect('log_in');
	}

}
