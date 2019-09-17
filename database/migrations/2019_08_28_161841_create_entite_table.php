<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entite', function(Blueprint $table)
		{
			$table->integer('identite')->primary();
			$table->integer('id_user')->index('id_user');
			$table->string('entite', 100)->nullable();
			$table->string('responsable', 100)->nullable();
			$table->string('adresse', 100)->nullable();
			$table->string('email', 20)->nullable();
			$table->string('bp', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entite');
	}

}
