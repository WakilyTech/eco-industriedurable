<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FonctionProductionMaintenance extends Model
{
    use \App\Models\GeneratedRelations\FonctionProductionMaintenance;

    /**
     * Nom de la table associée à ce modèle.
     *
     * @var string
     */
    protected $table = 'fonction_production_maintenance';

    /**
     * Liste des champs protégés contre l'assignation/modification.
     *
     * @var array
     */
    protected $guarded = ['id'];
    public $timestamps = false;
}
