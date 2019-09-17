<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProjetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('projet', function(Blueprint $table)
		{
			$table->foreign('identreprise', 'entreprise8')->references('id')->on('entreprise')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('identite', 'identite54')->references('identite')->on('entite')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('projet', function(Blueprint $table)
		{
			$table->dropForeign('entreprise8');
			$table->dropForeign('identite54');
		});
	}

}
