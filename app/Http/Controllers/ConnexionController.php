<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {

    	return view ('connexion');
    }

    public function traitement()
    {

    	request()->validate([
    		'Email'=>['required'],
    		'Motdepasse'=>['min:5'],
        ]);
    

    $resultat=auth()->attempt([
    	'mail_utilisateurs'=>request('Email'),
    	'password'=>request('Motdepasse'),
    ]);

   if($resultat){
         return redirect('/mon-compte');
   	}
    

    return back()->withInput()->withErrors([
    	'Email' => 'Votre adresse mail est  incorrecte.',
    	/*
    	'Motdepasse' => 'Votre mot de passe est incorrect.',
    	*/
    ]);
   
 
   
   }
}
