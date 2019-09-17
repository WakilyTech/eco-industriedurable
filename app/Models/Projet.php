<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use \App\Models\GeneratedRelations\Projet;

    /**
     * Nom de la table associée à ce modèle.
     *
     * @var string
     */
    protected $table = 'projet';

    /**
     * Liste des champs protégés contre l'assignation/modification.
     *
     * @var array
     */
    protected $guarded = ['id'];
    public $timestamps = false;
}
