<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSenderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sender', function(Blueprint $table)
		{
			$table->integer('id_departement');
			$table->integer('id_licence')->index('sender_licence0_FK');
			$table->primary(['id_departement','id_licence']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sender');
	}

}
