<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
     //   $user = Sentry::register(array('email' => 'john@doe.com', 'password' => 'test'));
		// $this->call('UserTableSeeder');
	//	$this->call('SentryGroupSeeder');
//		$this->call('SentryUserSeeder');
		$this->call('TreeGroupTop');
	}

}