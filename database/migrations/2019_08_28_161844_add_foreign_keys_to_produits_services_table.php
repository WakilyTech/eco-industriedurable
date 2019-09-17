<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProduitsServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produits_services', function(Blueprint $table)
		{
			$table->foreign('identreprise', 'entreprise4')->references('id')->on('entreprise')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('identite', 'identite4')->references('identite')->on('entite')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produits_services', function(Blueprint $table)
		{
			$table->dropForeign('entreprise4');
			$table->dropForeign('identite4');
		});
	}

}
