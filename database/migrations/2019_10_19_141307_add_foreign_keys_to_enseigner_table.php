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
			$table->foreign('id_matiere', 'FK_enseigner')->references('id_matiere')->on('matiere')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_departemnt', 'FK_enseigner2')->references('id_departemnt')->on('departement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_semestre', 'FK_enseigner3')->references('id_semestre')->on('semestre')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_annee', 'FK_enseigner4')->references('id_annee')->on('annee')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_licence', 'FK_enseigner5')->references('id_licence')->on('licence')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('FK_enseigner');
			$table->dropForeign('FK_enseigner2');
			$table->dropForeign('FK_enseigner3');
			$table->dropForeign('FK_enseigner4');
			$table->dropForeign('FK_enseigner5');
		});
	}

}
