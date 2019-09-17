<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntrepriseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entreprise', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('raison_sociale');
			$table->string('registre_commerce');
			$table->string('matricule_fiscale');
			$table->date('date_creation');
			$table->date('date_production');
			$table->string('responsable', 20);
			$table->string('email', 20)->nullable();
			$table->enum('forme_juridique', array('SA','SUARL','SARL'))->nullable();
			$table->string('capital', 100)->nullable();
			$table->enum('chiffre_affaires', array('50000000_500000000','500000000_2000000000','2000000000_20000000000','20000000000'))->nullable();
			$table->enum('certification_iso', array('ISO9001','ISO22000','ISO14001','ISO50001','OSAS18000'))->nullable();
			$table->enum('salaries_permanents', array('Homme','Femme'))->nullable();
			$table->enum('temporaires', array('Homme','Femme'))->nullable();
			$table->enum('gmao1', array('Oui','Non'))->nullable();
			$table->enum('sous_traitance1', array('Oui','Non'))->nullable();
			$table->enum('type_abonnement', array('moyennetension','bassetension'))->nullable();
			$table->string('puissance_souscrite')->nullable();
			$table->string('facture_annuelle')->nullable();
			$table->enum('secours', array('OUI','NON'))->nullable();
			$table->enum('typesecours', array('groupeelectrogene','onduleur'))->nullable();
			$table->string('autre')->nullable();
			$table->string('part_secourue')->nullable();
			$table->enum('emballage', array('papier','plastic','Métallique'))->nullable();
			$table->enum('prelevement', array('ReseauSDE','Forage','Mer',''))->nullable();
			$table->string('autre1')->nullable();
			$table->enum('rejet', array('ReseauONAS','SDE','MER'))->nullable();
			$table->string('autre2')->nullable();
			$table->enum('enlevement', array('EnlevementSpecialise','Decharge','Brulage'))->nullable();
			$table->enum('vaporisation_interne_possible', array('Oui','Non'))->nullable();
			$table->integer('login')->nullable();
			$table->enum('statut_autorisation', array('admin','consultant','classer','traitement'))->nullable();
			$table->enum('decison', array('Accepter','Refuser',''))->nullable();
			$table->string('avis_technique')->nullable();
			$table->string('adresse')->nullable();
			$table->integer('id_user')->index('id_user');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entreprise');
	}

}
