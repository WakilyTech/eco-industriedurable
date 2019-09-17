<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Environnement extends Model
{
    use \App\Models\GeneratedRelations\Environnement;

    /**
     * Nom de la table associée à ce modèle.
     *
     * @var string
     */
    protected $table = 'environnement';

    /**
     * Liste des champs protégés contre l'assignation/modification.
     *
     * @var array
     */
    protected $guarded = ['id'];
    public $timestamps = false;
}
