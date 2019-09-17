<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFonctionProductionMaintenanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fonction_production_maintenance', function(Blueprint $table)
		{
			$table->foreign('identreprise', 'entreprise2')->references('id')->on('entreprise')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('identite', 'identite22')->references('identite')->on('entite')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fonction_production_maintenance', function(Blueprint $table)
		{
			$table->dropForeign('entreprise2');
			$table->dropForeign('identite22');
		});
	}

}
