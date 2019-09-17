<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnvironnementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('environnement', function(Blueprint $table)
		{
			$table->integer('idenvironnement', true);
			$table->integer('identreprise')->index('identreprise');
			$table->integer('identite')->nullable()->index('identite');
			$table->string('detailRoute')->nullable();
			$table->string('distanceRoute')->nullable();
			$table->string('detailsPlan')->nullable();
			$table->string('distancePlan')->nullable();
			$table->string('detailsPublic')->nullable();
			$table->string('distancePublic')->nullable();
			$table->string('detailsCommerciaux')->nullable();
			$table->string('distanceCommerciaux')->nullable();
			$table->string('detailsIndustriels')->nullable();
			$table->string('distanceIndustriels')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('environnement');
	}

}
