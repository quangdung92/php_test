<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model {
		
	protected $table = 'files';
	protected $fillable = ['user_id', 'origilnal_filename', 'filename', 'mine'];
	
	public function user()
	    {
	        return $this->belongsTo('App\User');
	    }
}
