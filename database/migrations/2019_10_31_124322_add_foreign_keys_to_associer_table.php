<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAssocierTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('associer', function(Blueprint $table)
		{
			$table->foreign('id_departement', 'associer_departement_FK')->references('id_departement')->on('departement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_matiere', 'associer_matiere0_FK')->references('id_matiere')->on('matiere')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('associer', function(Blueprint $table)
		{
			$table->dropForeign('associer_departement_FK');
			$table->dropForeign('associer_matiere0_FK');
		});
	}

}
