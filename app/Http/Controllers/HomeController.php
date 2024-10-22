<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActualiteCollection;
use App\Http\Resources\ActualiteResource;
use Illuminate\Support\Facades\File;
use App\Models\demande;
use \App\Models\Actualite ;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $demandes = Actualite::all() ;
       return response()->json($demandes);
    }
    public function show($id){
        $ac = Actualite::find($id);
        return new ActualiteResource($ac);
    }
    public function store(Request $req){
        $this->validate($req,[
        'titre' => 'required',
        'image' => 'required',
        'description' => 'required',

        ]);
        $act = Actualite::create([
            'titre' => $req->titre,
            'image' => $req->image,
            'description' => $req->description,
            'loca' => $req->loca,
        ]);
        return new ActualiteResource($act);
    }
    public function update(Request $req,$id){
        $this->validate($req,[
        'titre' => 'required',
        'image' => 'required',
        'description' => 'required'
        ]);
        $ac = Actualite::find($id);
        $ac->titre=$req->titre;
        $ac->image=$req->image;
        $ac->description=$req->description;
        $ac->loca=$req->loca;
        $ac->save();
        return new ActualiteResource($ac);
    }

public function destroy(Request $req){
    $ac = Actualite::find($req->id);
    $ac->delete();
    return response()->json([

    'mssg' => "Bien enregistrer"]);
}

}
// $table->bigIncrements('id');
// $table->string('titre') ;
// $table->string('image') ;
// $table->string('description') ;
// $table->timestamps();
