<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnseigneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enseigne', function(Blueprint $table)
		{
			$table->integer('id_departement');
			$table->integer('id_annee')->index('enseigne_annee0_FK');
			$table->integer('id_matiere')->index('enseigne_matiere1_FK');
			$table->integer('id_semestre')->index('enseigne_semestre2_FK');
			$table->integer('id_licence')->index('enseigne_licence3_FK');
			$table->string('professeur', 150);
			$table->string('jour', 15);
			$table->string('intervale', 15);
			$table->primary(['id_departement','id_annee','id_matiere','id_semestre','id_licence']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enseigne');
	}

}
