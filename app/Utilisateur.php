<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class Utilisateur extends Model implements Authenticatable
{

    use BasicAuthenticatable;


	protected $fillable=['id_utilisateurs','nom_utilisateurs','prenom_utilisateurs','mail_utilisateurs','date_utilisateurs','mdp_utilisateurs','sexe_utilisateurs',];


	/** 
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mdp_utilisateurs;
    }
}
    
