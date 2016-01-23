<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersAddFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->timestamp('birthday')->nullable();
			$table->string('work_place');
			$table->integer('city_id');
			$table->integer('university_id');
			$table->string('telephone');
			$table->string('skype');
			$table->string('site_url');
			$table->string('avatar', 2048)->default('./images/avatars/default.png');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
