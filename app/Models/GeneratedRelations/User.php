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

trait User
{
    
    /**
     * Relation "has many" vers la table `entite`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entite()
    {
        return $this->hasMany(\App\Models\Entite::class, 'id_user');
    }

    /**
     * Relation "has many" vers la table `entreprise`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entreprise()
    {
        return $this->hasMany(\App\Models\Entreprise::class, 'id_user');
    }




}
