<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Log;
use Auth;
use App\FileUpload;


class UploadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		Log::info('This is some useful information.');
		return view('/upload/image');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$file = Request::file('photo');
		$extension = $file->getClientOriginalExtension();
		$filename = $file->getClientOriginalName();
		Log::info($file);
		//Store file
		Storage::disk('local')->put($filename, File::get($file));
		//Insert into DB
		FileUpload::create([
			'user_id' => Auth::user()['id'],
			'filename' => $file->getFilename().'.'.$extension,
			'mine' => $file->getClientMimeType(),
			'origilnal_filename' => $file->getClientOriginalName(),
		]);
		
		Log::info($filename);
		return redirect('upload')->with('msg','Uploaded');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
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
