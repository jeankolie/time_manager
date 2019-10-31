<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonnelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personnel', function(Blueprint $table)
		{
			$table->foreign('id_departement', 'FK_departement_perssonel')->references('id_departement')->on('departement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personnel', function(Blueprint $table)
		{
			$table->dropForeign('FK_departement_perssonel');
		});
	}

}
