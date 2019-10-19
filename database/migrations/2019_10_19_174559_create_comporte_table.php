<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComporteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comporte', function(Blueprint $table)
		{
			$table->integer('id_semestre');
			$table->integer('id_licence')->index('comporte_licence0_FK');
			$table->primary(['id_semestre','id_licence']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comporte');
	}

}
