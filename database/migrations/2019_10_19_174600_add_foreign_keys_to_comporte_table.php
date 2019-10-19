<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComporteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comporte', function(Blueprint $table)
		{
			$table->foreign('id_licence', 'comporte_licence0_FK')->references('id_licence')->on('licence')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_semestre', 'comporte_semestre_FK')->references('id_semestre')->on('semestre')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comporte', function(Blueprint $table)
		{
			$table->dropForeign('comporte_licence0_FK');
			$table->dropForeign('comporte_semestre_FK');
		});
	}

}
