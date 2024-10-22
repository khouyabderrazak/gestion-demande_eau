<?php

namespace App\Http\Controllers;
use App\Models\demande  ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class api_demande extends Controller
{
    public function addMessage(Request $req,$id){
           $demande=null;
           $demande=demande::find($id);
           if($demande!=null){
               $demande->Message=$req->Message;
               $demande->save();
               return  response()->json(['success'=>'true']);
           }
           return  response()->json(['success'=>'false']);

    }
    public function new(){
        $demandes =  DB::table('demandes')->where('is_completed', 'null')->where('is_valide' , 'null')->get();
        return $demandes ;
    }
    
    public function un_demande(int $id){
        $demande = demande::find($id) ;
        return $demande ;
    }
    public function displayimage(string $str){
        // $demande = demande::find($id) ;
        $filename = public_path("public/Image").'/'.$str;
        $image=Response::download($filename);
        return $image;

    }
    public function completed()
    {
        $demandes =  DB::table('demandes')->where('is_completed', 'true')->where('is_valide' , 'null')->get() ;
        return $demandes ;
    }
     public function non_completd()
    {
        $demandes =  DB::table('demandes')->where('is_completed', 'false')->where('is_valide' , 'null')->get() ;
        return $demandes ;
    }
     public function valide()
    {
        $demandes =  DB::table('demandes')->where('is_valide', 'true')->get() ;
        return $demandes ;
    }
     public function non_valide()
    {
        $demandes =  DB::table('demandes')->where('is_valide', 'false' )->get() ;
        return $demandes ;
    }

    public function make_non_valide(int $id)
    {

        $demande = demande::find($id) ;
        if ($demande->is_completed == "null"){
            $demande->is_completed = "false" ;
        }
        else{
            $demande->is_valide = "false" ;
        }
        $demande->save();
        return $id ;
    }

    public function make_valide(int $id){

        $demande = demande::find($id) ;
        if ($demande->is_completed == "null" || $demande->is_completed=="false"){
            $demande->is_completed = "true" ;
        }
        else{
            $demande->is_valide = "true" ;
        }
        $demande->save();
        return $id;
    }
    public function dest(int $id){
        $demande = demande::find($id) ;
        $demande->delete();

    }


    //api dzzz:
    public function display_cin_image(int $id){
        $demades = demande::find($id) ;
        $filename = public_path("public/Image").'/'.$demades["cin_img"];
        $image=Response::download($filename);
        return $image ;

    }
    public function display_demande_image(int $id){
        $demades = demande::find($id) ;
        $filename = public_path("public/Image").'/'.$demades["demande"];
        $image=Response::download($filename);
        return $image ;

    }
    public function display_plan_image(int $id){
        $demades = demande::find($id) ;
        $filename = public_path("public/Image").'/'.$demades["tasmime_3a9are"];
        $image=Response::download($filename);
        return $image ;

    }
    public function display_immobilier_image(int $id){
        $demades = demande::find($id) ;
        $filename = public_path("public/Image").'/'.$demades["milkiyate_3a9ar"];
        $image=Response::download($filename);
        return $image ;

    }
}
