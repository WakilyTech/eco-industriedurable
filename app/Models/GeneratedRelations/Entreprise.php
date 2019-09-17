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

trait Entreprise
{
    
    /**
     * Relation "has many" vers la table `consommation_combustibles`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consommationCombustiblesViaIdentreprise()
    {
        return $this->hasMany(\App\Models\ConsommationCombustible::class, 'identreprise');
    }

    /**
     * Relation "has many" vers la table `energie_renouvelable`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function energieRenouvelableViaIdentreprise()
    {
        return $this->hasMany(\App\Models\EnergieRenouvelable::class, 'identreprise');
    }

    /**
     * Relation "has many" vers la table `environnement`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function environnementViaIdentreprise()
    {
        return $this->hasMany(\App\Models\Environnement::class, 'identreprise');
    }

    /**
     * Relation "has many" vers la table `fonction_production_maintenance`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fonctionProductionMaintenanceViaIdentreprise()
    {
        return $this->hasMany(\App\Models\FonctionProductionMaintenance::class, 'identreprise');
    }

    /**
     * Relation "has many" vers la table `principales_matieres_premieres`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function principalesMatieresPremieresViaIdentreprise()
    {
        return $this->hasMany(\App\Models\PrincipaleMatierePremiere::class, 'identreprise');
    }

    /**
     * Relation "has many" vers la table `produits_services`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produitsServicesViaIdentreprise()
    {
        return $this->hasMany(\App\Models\ProduitService::class, 'identreprise');
    }

    /**
     * Relation "has many" vers la table `projet`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projetViaIdentreprise()
    {
        return $this->hasMany(\App\Models\Projet::class, 'identreprise');
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

    /**
     * Relation "has many" vers la table `utilite`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function utiliteViaIdentreprise()
    {
        return $this->hasMany(\App\Models\Utilite::class, 'identreprise');
    }

}
