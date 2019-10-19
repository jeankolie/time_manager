<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnseigneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('enseigne', function(Blueprint $table)
		{
			$table->foreign('id_annee', 'enseigne_annee0_FK')->references('id_annee')->on('annee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_departement', 'enseigne_departement_FK')->references('id_departement')->on('departement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_licence', 'enseigne_licence3_FK')->references('id_licence')->on('licence')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_matiere', 'enseigne_matiere1_FK')->references('id_matiere')->on('matiere')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_semestre', 'enseigne_semestre2_FK')->references('id_semestre')->on('semestre')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('enseigne', function(Blueprint $table)
		{
			$table->dropForeign('enseigne_annee0_FK');
			$table->dropForeign('enseigne_departement_FK');
			$table->dropForeign('enseigne_licence3_FK');
			$table->dropForeign('enseigne_matiere1_FK');
			$table->dropForeign('enseigne_semestre2_FK');
		});
	}

}
