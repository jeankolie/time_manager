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
			$table->integer('id_licence');
			$table->integer('id_departemnt')->index('FK_sender2');
			$table->primary(['id_licence','id_departemnt']);
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
