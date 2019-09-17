<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnvironnementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('environnement', function(Blueprint $table)
		{
			$table->foreign('identreprise', 'entreprise')->references('id')->on('entreprise')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('identite', 'identite1')->references('identite')->on('entite')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('environnement', function(Blueprint $table)
		{
			$table->dropForeign('entreprise');
			$table->dropForeign('identite1');
		});
	}

}
