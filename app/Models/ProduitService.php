<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProduitService extends Model
{
    use \App\Models\GeneratedRelations\ProduitService;

    /**
     * Nom de la table associée à ce modèle.
     *
     * @var string
     */
    protected $table = 'produits_services';

    /**
     * Liste des champs protégés contre l'assignation/modification.
     *
     * @var array
     */
    protected $guarded = ['id'];
    public $timestamps = false;
}
