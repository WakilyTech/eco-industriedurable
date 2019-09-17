<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrincipalesMatieresPremieresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('principales_matieres_premieres', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('identreprise')->index('identreprise');
			$table->integer('identite')->nullable()->index('identite');
			$table->string('designation')->nullable();
			$table->enum('origine', array('Nationale','CDEAO','Restedumonde'))->nullable();
			$table->string('designation1')->nullable();
			$table->enum('origine1', array('Nationale','CDEAO','Restedumonde'))->nullable();
			$table->string('designation2')->nullable();
			$table->enum('origine2', array('Nationale','CDEAO','Restedumonde'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('principales_matieres_premieres');
	}

}
