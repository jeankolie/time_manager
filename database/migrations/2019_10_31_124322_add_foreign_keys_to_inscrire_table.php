<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInscrireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inscrire', function(Blueprint $table)
		{
			$table->foreign('id_annee', 'inscrire_annee1_FK')->references('id_annee')->on('annee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_departement', 'inscrire_departement0_FK')->references('id_departement')->on('departement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_etudiant', 'inscrire_etudiant_FK')->references('id_etudiant')->on('etudiant')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_licence', 'inscrire_licence2_FK')->references('id_licence')->on('licence')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inscrire', function(Blueprint $table)
		{
			$table->dropForeign('inscrire_annee1_FK');
			$table->dropForeign('inscrire_departement0_FK');
			$table->dropForeign('inscrire_etudiant_FK');
			$table->dropForeign('inscrire_licence2_FK');
		});
	}

}
