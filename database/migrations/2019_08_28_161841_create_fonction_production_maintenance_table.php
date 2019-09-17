<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFonctionProductionMaintenanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fonction_production_maintenance', function(Blueprint $table)
		{
			$table->integer('idfpm', true);
			$table->integer('identreprise')->index('identreprise');
			$table->integer('identite')->nullable()->index('identite');
			$table->string('lignes_de_production_services')->nullable();
			$table->string('annee_de_mise_en_service')->nullable();
			$table->string('capacite')->nullable();
			$table->string('unite')->nullable();
			$table->string('lignes_de_production_services1')->nullable();
			$table->string('annee_de_mise_en_service1')->nullable();
			$table->string('capacite1')->nullable();
			$table->string('unite1')->nullable();
			$table->string('lignes_de_production_services2')->nullable();
			$table->string('annee_de_mise_en_service2')->nullable();
			$table->string('capacite2')->nullable();
			$table->string('unite2')->nullable();
			$table->string('lignes_de_production_services3')->nullable();
			$table->string('annee_de_mise_en_service3')->nullable();
			$table->string('capacite3')->nullable();
			$table->string('unite3')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fonction_production_maintenance');
	}

}
