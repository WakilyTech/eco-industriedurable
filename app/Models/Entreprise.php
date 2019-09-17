<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use \App\Models\GeneratedRelations\Entreprise;

    /**
     * Nom de la table associée à ce modèle.
     *
     * @var string
     */
    protected $table = 'entreprise';


    /**
     * Liste des champs protégés contre l'assignation/modification.
     *
     * @var array
     */
    protected $guarded = ['identreprise'];
    public $timestamps = false;
}
