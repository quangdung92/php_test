<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

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
