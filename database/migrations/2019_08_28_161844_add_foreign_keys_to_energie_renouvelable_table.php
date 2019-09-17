<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnergieRenouvelableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('energie_renouvelable', function(Blueprint $table)
		{
			$table->foreign('identreprise', 'identreprise')->references('id')->on('entreprise')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('energie_renouvelable', function(Blueprint $table)
		{
			$table->dropForeign('identreprise');
		});
	}

}
