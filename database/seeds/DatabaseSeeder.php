<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

require ('countries_api_vk.php');

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('countries_api_vk');
	}

}
