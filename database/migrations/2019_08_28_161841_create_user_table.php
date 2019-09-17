<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->enum('profil', array('projectmanager','entreprise','consultant','partenaire'));
			$table->string('login');
			$table->string('mdp');
			$table->string('email');
			$table->string('entite');
			$table->string('responsable');
			$table->string('adresse');
			$table->string('telephone');
			$table->string('bp');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
