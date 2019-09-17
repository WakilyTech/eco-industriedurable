<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConsommationCombustiblesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('consommation_combustibles', function(Blueprint $table)
		{
			$table->foreign('identite', 'entiter')->references('identite')->on('entite')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('identreprise', 'entreprise1')->references('id')->on('entreprise')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('consommation_combustibles', function(Blueprint $table)
		{
			$table->dropForeign('entiter');
			$table->dropForeign('entreprise1');
		});
	}

}
