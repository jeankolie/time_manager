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
			$table->integer('id_departement');
			$table->integer('id_matiere')->index('associer_matiere0_FK');
			$table->primary(['id_departement','id_matiere']);
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
