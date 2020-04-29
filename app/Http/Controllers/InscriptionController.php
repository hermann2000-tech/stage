<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire()
    {
    	return view('inscription');
    }

     public function traitement()
    {
          request()->validate([
    		'Nom'=>['required'],
    		'Prénom'=>['required'],
    		'Email'=>['required'],
    		'Date'=>['required'],
    		'Motdepasse'=>['min:5'],
    		'Sexe'=>['required'],
        ]);


          $utilisateur=new Utilisateur;
          $utilisateur->nom_utilisateurs=request('Nom');
          $utilisateur->prenom_utilisateurs=request('Prénom');
          $utilisateur->mail_utilisateurs=request('Email');
          $utilisateur->date_utilisateurs=request('Date');
  
          $utilisateur->mdp_utilisateurs=request('Motdepasse');
          $utilisateur->sexe_utilisateurs=request('Sexe');
  

          $utilisateur->save();
        

          return redirect('/connexion');
    }
}
