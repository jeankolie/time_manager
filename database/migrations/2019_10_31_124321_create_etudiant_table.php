<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtudiantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('etudiant', function(Blueprint $table)
		{
			$table->integer('id_etudiant', true);
			$table->string('matricule', 25);
			$table->string('prenom', 25);
			$table->string('nom', 15);
			$table->string('password', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('etudiant');
	}

}
