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
			$table->integer('id_departement');
			$table->integer('id_matiere')->index('enseigner_matiere0_FK');
			$table->integer('id_semestre')->index('enseigner_semestre1_FK');
			$table->integer('id_salle')->index('enseigner_salle2_FK');
			$table->integer('id_annee')->index('enseigner_annee3_FK');
			$table->string('professeur', 100);
			$table->string('jour', 15);
			$table->string('intervale', 15);
			$table->primary(['id_departement','id_matiere','id_semestre','id_salle','id_annee']);
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
