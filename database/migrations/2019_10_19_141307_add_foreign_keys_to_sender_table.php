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
			$table->foreign('id_licence', 'FK_sender')->references('id_licence')->on('licence')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_departemnt', 'FK_sender2')->references('id_departemnt')->on('departement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('FK_sender');
			$table->dropForeign('FK_sender2');
		});
	}

}
