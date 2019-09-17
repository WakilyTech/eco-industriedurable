<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnergieRenouvelableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('energie_renouvelable', function(Blueprint $table)
		{
			$table->integer('ider', true);
			$table->integer('identreprise')->index('identreprise');
			$table->enum('energieBiomasse', array('electricite','chaleur'))->nullable();
			$table->date('serviceBiomasse')->nullable();
			$table->string('utiliteBiomasse')->nullable();
			$table->string('puissanceBiomasse')->nullable();
			$table->enum('energieSolaire', array('electricite','chaleur'))->nullable();
			$table->date('serviceSolaire')->nullable();
			$table->string('utiliteSolaire')->nullable();
			$table->string('puissanceSolaire')->nullable();
			$table->enum('energieCogeneration', array('electricite','chaleur'))->nullable();
			$table->date('serviceCogeneration')->nullable();
			$table->string('utiliteCogeneration')->nullable();
			$table->string('puissanceCogeneration')->nullable();
			$table->string('energieAutres')->nullable();
			$table->date('serviceAutres')->nullable();
			$table->string('utiliteAutres')->nullable();
			$table->string('puissanceAutres')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('energie_renouvelable');
	}

}
