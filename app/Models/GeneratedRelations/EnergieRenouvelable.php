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

trait EnergieRenouvelable
{
    
    /**
     * Relation "belongs to" vers la table `entreprise`.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function identreprise()
    {
        return $this->belongsTo(\App\Models\Entreprise::class, 'identreprise');
    }

}
