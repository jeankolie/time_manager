<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonnelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personnel', function(Blueprint $table)
		{
			$table->integer('id_personnel')->primary();
			$table->integer('id_departemnt')->index('FK_appartenir');
			$table->string('nom_personnel', 20)->nullable();
			$table->string('login', 15)->nullable();
			$table->string('password', 100)->nullable();
			$table->string('slug', 25)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personnel');
	}

}
