<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrincipalesMatieresPremieresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('principales_matieres_premieres', function(Blueprint $table)
		{
			$table->foreign('identreprise', 'entreprise3')->references('id')->on('entreprise')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('identite', 'identite3')->references('identite')->on('entite')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('principales_matieres_premieres', function(Blueprint $table)
		{
			$table->dropForeign('entreprise3');
			$table->dropForeign('identite3');
		});
	}

}
