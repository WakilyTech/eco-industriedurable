<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class User extends Model implements Authenticatable
{

    use BasicAuthenticatable;
    use Notifiable;
    use \App\Models\GeneratedRelations\User;

    /**
     * Nom de la table associée à ce modèle.
     *
     * @var string
     */
    protected $table = 'user';

    public function getAuthPassword()
    {
        return $this->mdp;
    }

    /**
     * Liste des champs protégés contre l'assignation/modification.
     *
     * @var array
     */
    public $guarded = ['id'];
    public $timestamps = false;
}
