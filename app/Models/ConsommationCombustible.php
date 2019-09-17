<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsommationCombustible extends Model
{
    use \App\Models\GeneratedRelations\ConsommationCombustible;

    /**
     * Nom de la table associée à ce modèle.
     *
     * @var string
     */
    protected $table = 'consommation_combustibles';

    /**
     * Liste des champs protégés contre l'assignation/modification.
     *
     * @var array
     */
    protected $guarded = ['id'];
    public $timestamps = false;
}
