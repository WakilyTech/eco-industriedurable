<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsommationCombustiblesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consommation_combustibles', function(Blueprint $table)
		{
			$table->string('usageDiesel')->nullable();
			$table->string('factureDiesel')->nullable();
			$table->string('usageFuel')->nullable();
			$table->string('factureFuel')->nullable();
			$table->string('usageGaz')->nullable();
			$table->string('factureGaz')->nullable();
			$table->string('usageAutres')->nullable();
			$table->string('factureAutres')->nullable();
			$table->integer('idcc', true);
			$table->integer('identreprise')->index('identreprise');
			$table->integer('identite')->nullable()->index('identite');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('consommation_combustibles');
	}

}
