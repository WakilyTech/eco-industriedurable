<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilite extends Model
{
    use \App\Models\GeneratedRelations\Utilite;

    /**
     * Nom de la table associée à ce modèle.
     *
     * @var string
     */
    protected $table = 'utilite';

    /**
     * Liste des champs protégés contre l'assignation/modification.
     *
     * @var array
     */
    protected $guarded = ['id'];
    public $timestamps = false;
}
