<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('name', 30);
            $table->string('mid_name', 255);
            $table->string('last_name', 255)->nullable();
            $table->string('phone', 254);
            $table->string('email', 255);
            $table->string('photo', 255)->default('assets/img/samples/2.jpg');
            
            $table->string('login');
            $table->string('pass');
            
            $table->boolean('active')->default(true);
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contacts');
	}

}
