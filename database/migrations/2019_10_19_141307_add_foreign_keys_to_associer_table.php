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
			$table->foreign('id_departemnt', 'FK_associer')->references('id_departemnt')->on('departement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_matiere', 'FK_associer2')->references('id_matiere')->on('matiere')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('FK_associer');
			$table->dropForeign('FK_associer2');
		});
	}

}
