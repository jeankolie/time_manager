<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnseignerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('enseigner', function(Blueprint $table)
		{
			$table->foreign('id_annee', 'enseigner_annee3_FK')->references('id_annee')->on('annee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_departement', 'enseigner_departement_FK')->references('id_departement')->on('departement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_matiere', 'enseigner_matiere0_FK')->references('id_matiere')->on('matiere')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_salle', 'enseigner_salle2_FK')->references('id_salle')->on('salle')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_semestre', 'enseigner_semestre1_FK')->references('id_semestre')->on('semestre')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('enseigner', function(Blueprint $table)
		{
			$table->dropForeign('enseigner_annee3_FK');
			$table->dropForeign('enseigner_departement_FK');
			$table->dropForeign('enseigner_matiere0_FK');
			$table->dropForeign('enseigner_salle2_FK');
			$table->dropForeign('enseigner_semestre1_FK');
		});
	}

}
