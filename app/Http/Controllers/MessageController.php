<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importation des classes pour le mail
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageGoogle;

class MessageController extends Controller
{
	// Le formulaire du message
	// public function formMessageGoogle () {
	// 	return view("forms.message-google");
	// }

    // Envoi du mail aux utilisateurs
	public function sendMessageGoogle (Request $req) {

		#1. Validation de la requête
		// $this->validate($request, [ 'message' => 'bail|required' ]);

		#2. Récupération des utilisateurs

		// #3. Envoi du mail
		// Mail::to("omarbanini25@gmail.com")->bcc("omarbanini00@gmail.com")
		// 				->queue(new MessageGoogle($request->all()));

		// return back()->withText("Message envoyé");
        return view('contact' , [ 'demande' => $req]) ;
	}

}