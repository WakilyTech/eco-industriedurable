<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projet', function(Blueprint $table)
		{
			$table->integer('idprojet', true);
			$table->integer('identreprise')->index('identreprise');
			$table->integer('identite')->nullable()->index('identite');
			$table->enum('question1', array('Oui','Non'))->nullable();
			$table->date('datedeme')->nullable();
			$table->enum('question2', array('Oui','Non'))->nullable();
			$table->date('datepro')->nullable();
			$table->enum('question3', array('Oui','Non'))->nullable();
			$table->date('dateinstall')->nullable();
			$table->enum('question4', array('Oui','Non'))->nullable();
			$table->date('datecellule')->nullable();
			$table->enum('question5', array('Oui','Non'))->nullable();
			$table->text('impact', 65535)->nullable();
			$table->enum('question6', array('Oui','Non'))->nullable();
			$table->text('projet', 65535)->nullable();
			$table->enum('question7', array('Oui','Non'))->nullable();
			$table->text('modequestion7', 65535)->nullable();
			$table->string('lieu', 100)->nullable();
			$table->date('datee')->nullable();
			$table->enum('lu', array('oui'))->nullable();
			$table->string('responsable1')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projet');
	}

}
