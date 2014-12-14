<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 1) as $index)
		{
			User::create([
                'username' => 't0n1zz2',
                'name' => 'tony2',
                'password' => Hash::make('admin')
			]);
		}
	}

}