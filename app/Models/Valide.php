<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valide extends Model
{
    use \App\Models\GeneratedRelations\Valide;

    /**
     * Nom de la table associée à ce modèle.
     *
     * @var string
     */
    protected $table = 'valide';

    /**
     * Liste des champs protégés contre l'assignation/modification.
     *
     * @var array
     */
    protected $guarded = ['id'];
    public $timestamps = false;
}
