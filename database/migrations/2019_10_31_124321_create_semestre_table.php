<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSemestreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('semestre', function(Blueprint $table)
		{
			$table->integer('id_semestre', true);
			$table->string('nom', 50);
			$table->integer('id_licence')->index('FK_semestre_licence');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('semestre');
	}

}
