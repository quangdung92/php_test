<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;
use League\Csv\Reader;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
		
		$this->call('PostTableSeeder');
		$this->command->info('Post table seeded!');
		// $this->call('UserTableSeeder');
	}
}

class UserTableSeeder extends Seeder {

    public function run()
    {
		User::create([
			'name' => 'sa1234',
			'email' => 'sa1234@gmail.com',
			'password' => 'sa12345'
		]);
    }

}
class PostTableSeeder extends Seeder {

    public function run()
    {
    	$reader = Reader::createFromPath(storage_path().'/test_user.csv');
		foreach($reader as $key => $row) {
			if (!empty($row[0])) {
				Post::create([
					'user_id' => $row[1],
					'status' => $row[0],
				]);
			}
			
		}
    }

}
