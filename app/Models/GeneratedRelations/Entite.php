<?php
/**
 * NOTE IMPORTANTE !
 *
 * Ne pas modifier le contenu de ce fichier car celui-ci est régénéré par la commande
 * "php artisan models:generate" (axn/laravel-models-generator).
 *
 * Si vous souhaitez ajouter des relations au modèle associé, faîtes-le directement
 * dans celui-ci ou bien dans un autre trait.
 */
namespace App\Models\GeneratedRelations;

trait Entite
{
    
    /**
     * Relation "has many" vers la table `consommation_combustibles`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consommationCombustiblesViaIdentite()
    {
        return $this->hasMany(\App\Models\ConsommationCombustible::class, 'identite');
    }

    /**
     * Relation "has many" vers la table `environnement`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function environnementViaIdentite()
    {
        return $this->hasMany(\App\Models\Environnement::class, 'identite');
    }

    /**
     * Relation "has many" vers la table `fonction_production_maintenance`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fonctionProductionMaintenanceViaIdentite()
    {
        return $this->hasMany(\App\Models\FonctionProductionMaintenance::class, 'identite');
    }

    /**
     * Relation "has many" vers la table `principales_matieres_premieres`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function principalesMatieresPremieresViaIdentite()
    {
        return $this->hasMany(\App\Models\PrincipaleMatierePremiere::class, 'identite');
    }

    /**
     * Relation "has many" vers la table `produits_services`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produitsServicesViaIdentite()
    {
        return $this->hasMany(\App\Models\ProduitService::class, 'identite');
    }

    /**
     * Relation "has many" vers la table `projet`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projetViaIdentite()
    {
        return $this->hasMany(\App\Models\Projet::class, 'identite');
    }

    /**
     * Relation "belongs to" vers la table `user`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_user');
    }

}
