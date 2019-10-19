<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departement', function(Blueprint $table)
		{
			$table->integer('id_departemnt')->primary();
			$table->string('nom_departement', 25)->nullable();
			$table->string('responsable', 15)->nullable();
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
		Schema::drop('departement');
	}

}
