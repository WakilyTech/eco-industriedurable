<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitsServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produits_services', function(Blueprint $table)
		{
			$table->integer('idproduitetservice', true);
			$table->integer('identreprise')->index('identreprise');
			$table->integer('identite')->nullable()->index('identite');
			$table->string('designation')->nullable();
			$table->string('part_chiffre_affaire')->nullable();
			$table->string('designation2')->nullable();
			$table->string('part_chiffre_affaire2')->nullable();
			$table->string('designation3')->nullable();
			$table->string('part_chiffre_affaire3')->nullable();
			$table->string('designation4')->nullable();
			$table->string('part_chiffre_affaire4')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produits_services');
	}

}
