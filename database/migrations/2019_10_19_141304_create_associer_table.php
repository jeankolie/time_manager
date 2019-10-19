<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssocierTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('associer', function(Blueprint $table)
		{
			$table->integer('id_departemnt');
			$table->integer('id_matiere')->index('FK_associer2');
			$table->primary(['id_departemnt','id_matiere']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('associer');
	}

}
