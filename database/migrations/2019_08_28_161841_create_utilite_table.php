<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUtiliteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('utilite', function(Blueprint $table)
		{
			$table->integer('idu', true);
			$table->integer('identreprise')->index('identreprise');
			$table->enum('Vapeur', array('Oui','Non'))->nullable();
			$table->string('Commentaire')->nullable();
			$table->enum('Air_comprime', array('Oui','Non'))->nullable();
			$table->string('Commentaire1')->nullable();
			$table->enum('Froid', array('Oui','Non'))->nullable();
			$table->string('Commentaire2')->nullable();
			$table->enum('Chaleur_Process', array('Oui','Non'))->nullable();
			$table->string('Commentaire3')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('utilite');
	}

}
