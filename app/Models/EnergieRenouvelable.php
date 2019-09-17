<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnergieRenouvelable extends Model
{
    use \App\Models\GeneratedRelations\EnergieRenouvelable;

    /**
     * Nom de la table associée à ce modèle.
     *
     * @var string
     */
    protected $table = 'energie_renouvelable';

    /**
     * Liste des champs protégés contre l'assignation/modification.
     *
     * @var array
     */
    protected $guarded = ['id'];
    public $timestamps = false;
}
