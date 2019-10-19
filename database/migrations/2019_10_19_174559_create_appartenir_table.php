<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppartenirTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appartenir', function(Blueprint $table)
		{
			$table->integer('id_personnel');
			$table->integer('id_departement')->index('appartenir_departement0_FK');
			$table->primary(['id_personnel','id_departement']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('appartenir');
	}

}
