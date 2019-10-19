<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAppartenirTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('appartenir', function(Blueprint $table)
		{
			$table->foreign('id_departement', 'appartenir_departement0_FK')->references('id_departement')->on('departement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_personnel', 'appartenir_personnel_FK')->references('id_personnel')->on('personnel')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('appartenir', function(Blueprint $table)
		{
			$table->dropForeign('appartenir_departement0_FK');
			$table->dropForeign('appartenir_personnel_FK');
		});
	}

}
