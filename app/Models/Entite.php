<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entite extends Model
{
    use \App\Models\GeneratedRelations\Entite;

    /**
     * Nom de la table associée à ce modèle.
     *
     * @var string
     */
    protected $table = 'entite';

    /**
     * Liste des champs protégés contre l'assignation/modification.
     *
     * @var array
     */
    protected $guarded = ['id'];
    public $timestamps = false;
}
