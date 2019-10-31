<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInscrireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscrire', function(Blueprint $table)
		{
			$table->integer('id_etudiant');
			$table->integer('id_departement')->index('inscrire_departement0_FK');
			$table->integer('id_annee')->index('inscrire_annee1_FK');
			$table->integer('id_licence')->index('inscrire_licence2_FK');
			$table->date('date_inscription');
			$table->primary(['id_etudiant','id_departement','id_annee','id_licence']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inscrire');
	}

}
