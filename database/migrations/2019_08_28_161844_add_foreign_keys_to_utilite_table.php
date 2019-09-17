<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUtiliteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('utilite', function(Blueprint $table)
		{
			$table->foreign('identreprise', 'entreprise33')->references('id')->on('entreprise')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('utilite', function(Blueprint $table)
		{
			$table->dropForeign('entreprise33');
		});
	}

}
