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
			$table->integer('id_departement', true);
			$table->string('nom', 100);
			$table->string('responsable', 100);
			$table->string('slug', 100);
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
