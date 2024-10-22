<?php

namespace App\Http\Controllers;

use \App\Models\demande ;
use \App\Models\Actualite ;

use Illuminate\Http\Request;

class Actualites extends Controller
{
    public function ajoute_article(Request $req , $lang = 'fr')
    {
        app()->setlocale($lang) ;
            $demandes = demande::all() ;          
            $new = new Actualite ;
            $new->titre = $req->titre ;
            $new->image = $req->file('myfile')->getClientOriginalName();
            $req->file('myfile')->move(public_path('public/new'), $req->file('myfile')->getClientOriginalName());
            $new->description = $req->des ;
            $new->save() ;
            return view('Admina', [ 'demandes' => $demandes ] );
        }
    public function getnew($lang = 'fr'){
        app()->setlocale($lang) ;
        $new = Actualite::all() ;
        return view('index' , [ 'news' => $new] ) ;
    }
}
