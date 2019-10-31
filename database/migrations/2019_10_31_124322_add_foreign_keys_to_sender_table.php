<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSenderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sender', function(Blueprint $table)
		{
			$table->foreign('id_departement', 'sender_departement_FK')->references('id_departement')->on('departement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_licence', 'sender_licence0_FK')->references('id_licence')->on('licence')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sender', function(Blueprint $table)
		{
			$table->dropForeign('sender_departement_FK');
			$table->dropForeign('sender_licence0_FK');
		});
	}

}
