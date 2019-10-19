<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnseignerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enseigner', function(Blueprint $table)
		{
			$table->integer('id_matiere');
			$table->integer('id_departemnt')->index('FK_enseigner2');
			$table->integer('id_semestre')->index('FK_enseigner3');
			$table->integer('id_annee')->index('FK_enseigner4');
			$table->integer('id_licence')->index('FK_enseigner5');
			$table->string('professeur', 150)->nullable();
			$table->string('jour', 15)->nullable();
			$table->string('intervale', 15)->nullable();
			$table->primary(['id_matiere','id_departemnt','id_semestre','id_annee','id_licence'], 'primary_key_enseigner');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enseigner');
	}

}
