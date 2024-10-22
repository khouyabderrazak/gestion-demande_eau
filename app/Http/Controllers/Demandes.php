<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\demande;
use PDF;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageGoogle;
use App\Mail\notification;
class Demandes extends Controller
{
    private $id = 4 ;
    public function index()
    {
        return view('index');
    }
    public function contact($lang)
    {
        app()->setlocale($lang) ;
        return view('contact');
    }
    public function suivi($lang)
    {
        app()->setlocale($lang);
        return view('suivi');
    }
    
    public function create($lang)
    {
        app()->setlocale($lang) ;
        return view('depose') ;
    }
    public function save(Request $req)
    {
        $demande = new demande ;
        $demande->nom = $req->nom ;
        $demande->prenom = $req->prenom ;

        $demande->cin = $req->cin ;
        $demande->type_demande = $req->type_demande ;
        $demande->cin_img = $req->file('cin_img')->getClientOriginalName();
        // $path = $req->file('cin_img')->getRealPath();
        // $logo = file_get_contents($path);
        // $base64 = base64_encode($logo);
        // $demande->cin_img = $base64;
        $demande->demande = $req->file('demande')->getClientOriginalName();
        $req->file('cin_img')->move(public_path('public/Image'), $req->file('cin_img')->getClientOriginalName());
        $req->file('demande')->move(public_path('public/Image'), $req->file('demande')->getClientOriginalName());
        // $demande->img1 = demande::disk('img1')->path();
        // $demande->etat_demande = "pas encore" ;
        $demande->nom_batimant = $req->nom_batimant ;
        $demande->daaira = $req->daaira ;
        $demande->province = $req->province ;
        $demande->douar = $req->douar ;
        $demande->commune = $req->commune ;
        $demande->qiyada = $req->qiyada ;
        $demande->tasmime_3a9are = $req->file('tasmime_3a9are')->getClientOriginalName();
        $demande->milkiyate_3a9ar = $req->file('milkiyate_3a9ar')->getClientOriginalName();
        $req->file('tasmime_3a9are')->move(public_path('public/Image'), $req->file('tasmime_3a9are')->getClientOriginalName());
        $req->file('milkiyate_3a9ar')->move(public_path('public/Image'), $req->file('milkiyate_3a9ar')->getClientOriginalName());
        $demande->localisationPointDeau = $req->localisationPointDeau ;
        $demande->profendeur = $req->profendeur ;
        $demande->debit = $req->debit ;
        $demande->plan_Deau = $req->plan_Deau ;
        $demande->is_completed = "null" ;
        $demande->is_valide = "null" ;
        $demande->Message = null;
        $demande->save() ;

        // $req1=[$demande->nom, $demande->prenom,$demande->cin];
        // Mail::to("omarbanini00@gmail.com")->bcc("omarbanini25@gmail.com")
						// ->queue(new notification($req1));

		back()->withText("Message envoyé");

        return view('pdf' , ['demande' => $demande ]);

    }

    public function save1(Request $req)
    {   
        $demande=null;

        $demande = demande::find($req->id);
        if($demande!=null){
        $demande->nom = $req->nom ;
        $demande->prenom = $req->prenom ;

        $demande->cin = $req->cin ;
        $demande->type_demande = $req->type_demande ;
        $demande->cin_img = $req->file('cin_img')->getClientOriginalName();
        $demande->demande = $req->file('demande')->getClientOriginalName();
        $req->file('cin_img')->move(public_path('public/Image'), $req->file('cin_img')->getClientOriginalName());
        $req->file('demande')->move(public_path('public/Image'), $req->file('demande')->getClientOriginalName());
        $demande->nom_batimant = $req->nom_batimant ;
        $demande->daaira = $req->daaira ;
        $demande->province = $req->province ;
        $demande->douar = $req->douar ;
        $demande->commune = $req->commune ;
        $demande->qiyada = $req->qiyada ;
        $demande->tasmime_3a9are = $req->file('tasmime_3a9are')->getClientOriginalName();
        $demande->milkiyate_3a9ar = $req->file('milkiyate_3a9ar')->getClientOriginalName();
        $req->file('tasmime_3a9are')->move(public_path('public/Image'), $req->file('tasmime_3a9are')->getClientOriginalName());
        $req->file('milkiyate_3a9ar')->move(public_path('public/Image'), $req->file('milkiyate_3a9ar')->getClientOriginalName());
        $demande->localisationPointDeau = $req->localisationPointDeau ;
        $demande->profendeur = $req->profendeur ;
        $demande->debit = $req->debit ;
        $demande->plan_Deau = $req->plan_Deau ;
        $demande->is_completed = "null" ;
        $demande->is_valide = "null" ;
        $demande->Message = null;
        $demande->save() ;
            return view('pdf' , ['demande' => $demande ]);
        }
        return 'error';
    }
    public function Pdfim(Request $req){
        $d = demande::find($req);
        $pdf = PDF::loadView('Pdfaim',[
            'mode'                       => '',
            'format'                     => 'A4',
            'default_font_size'          => '12',
            'default_font'               => 'sans-serif',
            'margin_left'                => 10,
            'margin_right'               => 10,
            'margin_top'                 => 10,
            'margin_bottom'              => 10,
            'margin_header'              => 0,
            'margin_footer'              => 0,
            'orientation'                => 'P',
            'title'                      => 'Laravel mPDF',
            'author'                     => '',
            'watermark'                  => '',
            'show_watermark'             => false,
            'show_watermark_image'       => false,
            'watermark_font'             => 'sans-serif',
            'display_mode'               => 'fullpage',
            'watermark_text_alpha'       => 0.1,
            'watermark_image_path'       => '',
            'watermark_image_alpha'      => 0.2,
            'watermark_image_size'       => 'D',
            'watermark_image_position'   => 'P',
            'custom_font_dir'            => '',
            'custom_font_data'           => [],
            'auto_language_detection'    => false,
            'temp_dir'                   => rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR),
            'pdfa'                       => false,
            'pdfaauto'                   => false,
            'use_active_forms'           => false,
          ]);
        return $pdf->download($d[0]->nom.''.$d[0]->prenom.'recu.pdf');
    
    }
    public function Pdfa($id){
        $data=null;
        $data=demande::find($id);
        $data=[
            'numero'=>$data->id,
            'nom'=>$data->nom,
            'prenom'=>$data->prenom,
            'cin'=>$data->cin,
            'created_at'=>$data->created_at
        ];
        if($data!=null){
            $pdf=PDF::loadView('Pdfa',$data ,[
            'mode'                       => '',
            'format'                     => 'A4',
            'default_font_size'          => '12',
            'default_font'               => 'sans-serif',
            'margin_left'                => 10,
            'margin_right'               => 10,
            'margin_top'                 => 10,
            'margin_bottom'              => 10,
            'margin_header'              => 0,
            'margin_footer'              => 0,
            'orientation'                => 'P',
            'title'                      => 'Laravel mPDF',
            'author'                     => '',
            'watermark'                  => '',
            'show_watermark'             => false,
            'show_watermark_image'       => false,
            'watermark_font'             => 'sans-serif',
            'display_mode'               => 'fullpage',
            'watermark_text_alpha'       => 0.1,
            'watermark_image_path'       => '',
            'watermark_image_alpha'      => 0.2,
            'watermark_image_size'       => 'D',
            'watermark_image_position'   => 'P',
            'custom_font_dir'            => '',
            'custom_font_data'           => [],
            'auto_language_detection'    => false,
            'temp_dir'                   => rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR),
            'pdfa'                       => false,
            'pdfaauto'                   => false,
            'use_active_forms'           => false,
            ]  
           );
            return $pdf->download($data['nom'].''.$data['prenom'].'.pdf');     
        }
    }
    
    public function espase_Admin($lang){
        app()->setlocale($lang) ;
        return view('espase_Admin') ;
    }
    public function admin_test(Request $req,$lang)
    {
        if ($req->nom == 'labnine' && $req->code == "1999") {
            $demandes = demande::all();
            app()->setlocale($lang);
            $req->session()->put('user', 'labnine');
            return view('Admin', ['demandes' => $demandes ] );
        }
        else{
            app()->setlocale($lang) ;
            return view("espase_Admin") ;
        }
    }
    public function view(Request $req){
        $demande = demande::find($req->id) ;
        return view('view' , [ 'demande' => $demande]) ;
    }
    public function chf(Request $req,$lang){
        app()->setlocale($lang);
        $demande =demande::find($req->id);
        return view('depose1' , [ 'demande' => $demande]) ;
    
    }
    public function accepte(Request $req)
    {
        #accepte la demande
        $demande = demande::find($req->id);
        $demande->etat_demande = 'accepte';
        $demande->save();

        #affiche tous les demande non accpte ou pas encore
        $demandes = demande::all() ;
        return view('Admin', ['demandes' => $demandes ] );
    }
    public function refuse(Request $req){
        #accepte la demande
        $demande = demande::find($req->id);
        $demande->etat_demande = 'refuse';
        $demande->save();

        #affiche tous les demande non accpte ou pas encore
        $demandes = demande::all() ;
        return view('Admin', ['demandes' => $demandes ] );
    }
    public function suivi_demande(Request $req,$lang)
    {
        $demande_id = null ;
        $demande_code = null ;
        $demande_id = demande::find($req->id) ;
        // $demande_code = demande::find($req->id,'cin') ;
        if ($demande_id != null && $demande_id->cin==$req->code) {
                app()->setlocale($lang) ;
                return view('suivi_demande' , ['demande' => $demande_id ]);
        }
        else{
            app()->setlocale($lang) ;
            return view('suivi1');
        }
    }

    public function admin($lang){
        $demandes = demande::all() ;
        app()->setlocale($lang) ;
        return view('Admin', [ 'demandes' => $demandes ] );
    }
    public function admina($lang){
        $demandes = demande::all() ;
        app()->setlocale($lang) ;
        return view('Admina', [ 'demandes' => $demandes ] );
    }
    public function adminr($lang){
        $demandes = demande::all();
        app()->setlocale($lang) ;
        return view('Adminr', [ 'demandes' => $demandes ] );
    }
    public function admint($lang){
        $demandes = demande::all() ;
        app()->setlocale($lang) ;
        return view('Admint', [ 'demandes' => $demandes ] );
    }
    public function sendMessageGoogle (Request $reqs) {
		#1. Validation de la requête
        // $reqs=$req->nom;
		// $this->validate($req, [ 'message' => 'bail|required' ]);
        $req=[$reqs->nom,$reqs->email,$reqs->text];
		#2. Récupération des utilisateurs

		#3. Envoi du mail
		Mail::to("omarbanini00@gmail.com")->bcc("omarbanini00@gmail.com")
						->queue(new MessageGoogle($req));

		return back()->withText("Message envoyé");
        // return view('contact' , [ 'demande' => $req->omar]) ;
	}

    //api mssg milaf ghayr mktamil
    public function store1(Request $req){
        $this->validate($req,[
        'Message' => 'required',
        'id' => 'required',

        ]);
        
        $demande = demande::find($req->id);
        $demande->Message = $req->Message;
        $demande->save() ;
    }

}
