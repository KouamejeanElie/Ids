<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\Blockchain;
use App\Integration;
use App\Etude;
use App\Formation;
use App\FormContact;
use App\Rdv;
use App\AjoutFormation;
use App\AjoutProjet;
use App\AjoutTemoignage;
use App\AjoutIntegration;
use App\Certificat;
use App\User;
use App\Bourse;
use App\Diplome;
use Flashy;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
   public function __construct(){
     
     $this->middleware('auth');
    }

    public function index()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $users = User::all()
                    ->count();
        $ListeLastFormations = Formation::where('created_at','<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at','desc')
                               ->paginate(5);
       return view('Admin.adminhome',compact('totalContact','totalEtude','totalRdv','totalFormation','totalBlockchain','ListeLastFormations','totalIntegration','users'));
    }

    public function showAdminRdv()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeTotalRdvs = Rdv::paginate(5);
        return view('Admin.Pages.formsrdv',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeTotalRdvs'));

    }

        public function showAdminContact()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeTotalContacts = FormContact::paginate(5);
        return view('Admin.Pages.formscontact',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeTotalContacts'));

    }

         public function showAdminFormation()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeTotalFormations = Formation::paginate(5);
        return view('Admin.Pages.formsformation',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeTotalFormations'));

    }

    public function showAdminEtude()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeTotalEtudes = Etude::paginate(5);
        return view('Admin.Pages.formsetudeconseil',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeTotalEtudes'));

    }

    public function showAdminIntegration()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeTotalIntegrations = Integration::paginate(5);
        return view('Admin.Pages.formsintegration',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeTotalIntegrations'));

    }


    public function showAdminUtilisateur()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeTotalIntegrations = Integration::paginate(5);
        $users = User::all()
                    ->count();
        $listeTotalUtilisateurs = User::where('is_admin', '=', '0')
                                 ->paginate(5);
        return view('Admin.Pages.formsutilisateur',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeTotalIntegrations','users','listeTotalUtilisateurs'));

    }


    public function showAdminStoreFormation()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeTotalAjoutFormations = AjoutFormation::paginate(5);
        return view('Admin.Pages.storeformformation',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeTotalAjoutFormations'));

    }


 public function showAdminStoreProjet()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeTotalAjoutProjets = AjoutProjet::paginate(5);
        return view('Admin.Pages.storeformprojet',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeTotalAjoutProjets'));

    }


 public function showAdminStoreTemoignage()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeTotalAjoutTemoignages = AjoutTemoignage::paginate(5);
        return view('Admin.Pages.storeformtemoignage',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeTotalAjoutTemoignages'));

    }


 public function showAdminStoreIntegration()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeTotalAjoutIntegrations = AjoutIntegration::paginate(5);
        return view('Admin.Pages.storeformintegration',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeTotalAjoutIntegrations'));

    }

  public function showAdminStoreCertificat()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeAllusers = User::where('is_admin', '=', '0')
              ->paginate(5);
        $listeAllcertificats = Certificat::paginate(5);
        return view('Admin.Pages.storeformcertificat',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeAllusers','listeAllcertificats'));

    }

      public function showAdminStoreBourse()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
         $listeAllusers = User::where('is_admin', '=', '0')
              ->paginate(5);
        $listeAllbourses = Bourse::paginate(5);
        return view('Admin.Pages.storeformbourse',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeAllusers','listeAllbourses'));

    }

      public function showAdminStoreDiplome()
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $listeAllusers = User::where('is_admin', '=', '0')
              ->paginate(5);
        $listeAlldiplomes = Diplome::paginate(5);
        return view('Admin.Pages.storeformdiplome',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','listeTotalAjoutIntegrations','listeAllusers','listeAlldiplomes'));

    }



public function StoreFormation(Request $request)
    {
        $request->validate([

        'titrebouton' => 'required|min:5',
        'soustitre' => 'required|min:5',
        'titre' => 'required|min:5',
        'descriptifformation'=> 'required',
        'nomformateur'=> 'required|min:5',
        'dateformation'=> 'required',
        'categorieformation' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width=372,height=420|max:2048',
      ],

      [
        'titrebouton.required' => 'Ce champ est obligatoire',
        'titrebouton.min' => 'Ce champ doit contenir plus de 5 caratères',
        'soustitre.required' => 'Ce champ est obligatoire',
        'soustitre.min' => 'Ce champ doit contenir plus de 5 caratères',
        'titre.required' => 'Ce champ est obligatoire',
        'titre.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.required' => 'Entrez une image svp !',
        'image.image' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.mimes' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.dimensions' => 'image doit être aux dimenssions 372x420',
        'image.max' => 'image lourde',
        'descriptifformation.required' => 'Ce champ est obligatoire',
        'nomformateur.required' => 'Ce champ est obligatoire',
        'nomformateur.min' => 'Ce champ doit contenir plus de 5 caratères',
        'dateformation.required' => 'Ce champ est obligatoire',
        'categorieformation.required' => 'Ce champ est obligatoire',

      ]

     );
       
       $ajoutformation = new AjoutFormation;
       $ajoutformation->titrebouton = $request->input('titrebouton');
       $ajoutformation->soustitre = $request->input('soustitre');
       $ajoutformation->titre = $request->input('titre');
       $ajoutformation->descriptifformation = $request->input('descriptifformation');
      $ajoutformation->nomformateur = $request->input('nomformateur');
      $ajoutformation->dateformation = $request->input('dateformation');
      $ajoutformation->categorieformation = $request->input('categorieformation');
       if($request->hasfile('image'))
       {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/formation/', $filename);
         $ajoutformation->image = $filename;
       }
         $ajoutformation->save();
         Flashy::success('Félicitation, vous avez ajouté une formation à votre plateforme !');
         return back();
    }

 public function StoreProjet(Request $request)
    {
        $request->validate([

        'titreprojet' => 'required|min:5',
        'descriptifprojet' => 'required|min:5',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width=370,height=250|max:2048',
      ],

      [
        'titreprojet.required' => 'Ce champ est obligatoire',
        'titreprojet.min' => 'Ce champ doit contenir plus de 5 caratères',
        'descriptifprojet.required' => 'Ce champ est obligatoire',
        'descriptifprojet.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.required' => 'Entrez une image svp !',
        'image.image' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.mimes' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.dimensions' => 'image doit être aux dimenssions 370x250',
        'image.max' => 'image lourde',
      ]

     );
       
       $ajoutprojet = new AjoutProjet;
       $ajoutprojet->titreprojet = $request->input('titreprojet');
       $ajoutprojet->descriptifprojet = $request->input('descriptifprojet');
       if($request->hasfile('image'))
       {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/projet/', $filename);
         $ajoutprojet->image = $filename;
       }
         $ajoutprojet->save();
         Flashy::success('Félicitation, vous avez ajouté un projet à votre plateforme !');
         return back();
    }


    public function StoreTemoignage(Request $request)
    {
        $request->validate([

        'nom' => 'required|min:5',
        'provenance' => 'required|min:5',
        'message' => 'required|min:5',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width=100,height=100|max:2048',
      ],

      [
        'nom.required' => 'Ce champ est obligatoire',
        'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
        'provenance.required' => 'Ce champ est obligatoire',
        'provenance.min' => 'Ce champ doit contenir plus de 5 caratères',
        'message.required' => 'Ce champ est obligatoire',
        'message.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.required' => 'Entrez une image svp !',
        'image.image' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.mimes' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.dimensions' => 'image doit être aux dimenssions 100x100',
        'image.max' => 'image lourde',
      ]

     );
       
       $ajouttemoignage = new AjoutTemoignage;
       $ajouttemoignage->nom = $request->input('nom');
       $ajouttemoignage->provenance = $request->input('provenance');
       $ajouttemoignage->message = $request->input('message');
       if($request->hasfile('image'))
       {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/temoignage/', $filename);
         $ajouttemoignage->image = $filename;
       }
         $ajouttemoignage->save();
         Flashy::success('Félicitation, vous avez ajouté un nouveau temoignage à votre plateforme !');
         return back();
    }

    public function StoreIntegration(Request $request)
    {
        $request->validate([

        'titre' => 'required|min:5',
        'soustitre' => 'required|min:5',
        'categorie' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width=370,height=440|max:2048',
      ],

      [
        'titrebouton.required' => 'Ce champ est obligatoire',
        'titrebouton.min' => 'Ce champ doit contenir plus de 5 caratères',
        'soustitre.required' => 'Ce champ est obligatoire',
        'soustitre.min' => 'Ce champ doit contenir plus de 5 caratères',
        'titre.required' => 'Ce champ est obligatoire',
        'titre.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.required' => 'Entrez une image svp !',
        'image.image' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.mimes' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.dimensions' => 'image doit être aux dimenssions 370x440',
        'image.max' => 'image lourde',

      ]

     );
       
       $ajoutintegration = new AjoutIntegration;
       $ajoutintegration->titre = $request->input('titre');
       $ajoutintegration->soustitre = $request->input('soustitre');
       $ajoutintegration->categorie = $request->input('categorie');
       if($request->hasfile('image'))
       {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/integration/', $filename);
         $ajoutintegration->image = $filename;
       }
         $ajoutintegration->save();
         Flashy::success('Félicitation, vous avez ajouté une solution web à votre plateforme !');
         return back();
    }


 public function StoreCertificat(Request $request)
    {
        $request->validate([

        'libellecertificat' => 'required|min:5',
        'id_user' => 'required',
        'statut' => 'required',
        'files' => 'required|file|max:5000|mimes:doc,docx,pdf',
      ],

      [
        'libellecertificat.required' => 'Ce champ est obligatoire',
        'libellecertificat.min' => 'Ce champ doit contenir plus de 5 caratères',
        'id_user.required' => 'Ce champ est obligatoire !',
        'statut.required' => 'Ce champ est obligatoire !',
        'files.required' => 'Entrez un fichier Svp !',
        'files.file' => 'Entrez un fichier au format doc, docx, pdf Svp !',
        'files.mimes' => 'Entrez un fichier au format doc, docx, pdf Svp !',
        'files.max' => 'fichier lourd !',
      ]

     );
       
       $validatecertificat = new Certificat;
       $validatecertificat->libellecertificat = $request->input('libellecertificat');
       $validatecertificat->statut = $request->input('statut');
       $validatecertificat->id_user = $request->input('id_user');
       if($request->hasfile('files'))
       {
         $file = $request->file('files');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/certificat/', $filename);
         $validatecertificat->files = $filename;
       }
         $validatecertificat->save();
         Flashy::success('Félicitation, nouveau certificat edité !');
         return back();
    }

     public function StoreDiplome(Request $request)
    {
        $request->validate([

        'libellediplome' => 'required|min:5',
        'id_user' => 'required',
        'statut' => 'required',
        'id_diplome' => 'required|unique:diplomes',
        'files' => 'required|file|max:5000|mimes:doc,docx,pdf',
      ],

      [
        'libellediplome.required' => 'Ce champ est obligatoire',
        'libellediplome.min' => 'Ce champ doit contenir plus de 5 caratères',
        'id_user.required' => 'Ce champ est obligatoire !',
        'statut.required' => 'Ce champ est obligatoire !',
        'id_diplome.required' => 'Ce champ est obligatoire !',
        'id_diplome.unique' => 'Cet identifiant existe dans votre base !',
        'files.required' => 'Entrez un fichier Svp !',
        'files.file' => 'Entrez un fichier au format doc, docx, pdf Svp !',
        'files.mimes' => 'Entrez un fichier au format doc, docx, pdf Svp !',
        'files.max' => 'fichier lourd !',
      ]

     );
       
       $validatediplome = new Diplome;
       $validatediplome->libellediplome = $request->input('libellediplome');
       $validatediplome->statut = $request->input('statut');
       $validatediplome->id_user = $request->input('id_user');
       $validatediplome->id_diplome = $request->input('id_diplome');
       if($request->hasfile('files'))
       {
         $file = $request->file('files');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/diplome/', $filename);
         $validatediplome->files = $filename;
       }
         $validatediplome->save();
         Flashy::success('Félicitation, nouveau diplome edité !');
         return back();
    }


 public function EditAdminStoreFormation($id)
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $ajoutformation = AjoutFormation::find($id);
    return view('Admin.PageEdit.storeformformationedit',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','ajoutformation'));

    }


 public function EditAdminStoreProjet($id)
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $ajoutprojet = AjoutProjet::find($id);
    return view('Admin.PageEdit.storeformprojetedit',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','ajoutprojet'));

    }


 public function EditAdminStoreTemoignage($id)
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $ajouttemoignage = AjoutTemoignage::find($id);
    return view('Admin.PageEdit.storeformtemoignageedit',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','ajouttemoignage'));

    }

 public function EditAdminStoreIntegration($id)
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $ajoutintegration = AjoutIntegration::find($id);
    return view('Admin.PageEdit.storeformintegrationedit',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','ajoutintegration'));

    }

 public function EditAdminStoreCertificat($id)
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $modifcertificat = Certificat::find($id);
    return view('Admin.PageEdit.storeformcertificatedit',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','modifcertificat'));

    }

 public function EditAdminStoreDiplome($id)
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $modifdiplome = Diplome::find($id);
    return view('Admin.PageEdit.storeformdiplomeedit',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','modifdiplome'));

    }

     public function EditAdminStoreBourse($id)
    {
        $totalIntegration = Integration::all()
                               ->count();
        $totalBlockchain = Blockchain::all()
                               ->count();
        $totalContact = FormContact::all()
                                 ->count();
        $totalEtude = Etude::all()
                          ->count();
        $totalRdv = Rdv::all()
                    ->count();
        $totalFormation = Formation::all()
                       ->count();
        $modifbourse = Bourse::find($id);
    return view('Admin.PageEdit.storeformbourseedit',compact('totalIntegration','totalBlockchain','totalContact','totalEtude','totalRdv','totalFormation','modifbourse'));

    }


 public function updateformformation(Request $request, $id)
    {
         $request->validate([

        'titrebouton' => 'required|min:5',
        'soustitre' => 'required|min:5',
        'titre' => 'required|min:5',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width=372,height=420|max:2048',
        'descriptifformation'=> 'required',
        'nomformateur'=> 'required|min:5',
        'dateformation'=> 'required',
        'categorieformation' => 'required',
      ],

      [
        'titrebouton.required' => 'Ce champ est obligatoire',
        'titrebouton.min' => 'Ce champ doit contenir plus de 5 caratères',
        'soustitre.required' => 'Ce champ est obligatoire',
        'soustitre.min' => 'Ce champ doit contenir plus de 5 caratères',
        'titre.required' => 'Ce champ est obligatoire',
        'titre.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.required' => 'Entrez une image svp !',
        'image.image' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.mimes' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.dimensions' => 'image doit être aux dimenssions 372x420',
        'image.max' => 'image lourde',
        'descriptifformation.required' => 'Ce champ est obligatoire',
        'nomformateur.required' => 'Ce champ est obligatoire',
        'nomformateur.min' => 'Ce champ doit contenir plus de 5 caratères',
        'dateformation.required' => 'Ce champ est obligatoire',
        'categorieformation.required' => 'Ce champ est obligatoire',

      ]

     );

      $formformation = AjoutFormation::find($id);
      $formformation->titrebouton = $request->input('titrebouton');
      $formformation->soustitre = $request->input('soustitre');
      $formformation->titre = $request->input('titre');
      $formformation->descriptifformation = $request->input('descriptifformation');
      $formformation->nomformateur = $request->input('nomformateur');
      $formformation->dateformation = $request->input('dateformation');
      $formformation->categorieformation = $request->input('categorieformation');
       if($request->hasfile('image'))
       {
         $destination = 'uploads/formation'.$formformation->image;
             if(File::exists($destination))
             {
               File::delete($destination); 
             }
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/formation/', $filename);
         $formformation->image = $filename;
       }
         $formformation->update();
         Flashy::success("Votre Formation recemment editée a été modifié avec succès !");
         return back();
    }

     public function updateformprojet(Request $request, $id)
    {
         $request->validate([

        'titreprojet' => 'required|min:5',
        'descriptifprojet' => 'required|min:5',
        'image' => 'image'
      ],

      [
        'titreprojet.required' => 'Ce champ est obligatoire',
        'titreprojet.min' => 'Ce champ doit contenir plus de 5 caratères',
        'descriptifprojet.required' => 'Ce champ est obligatoire',
        'descriptifprojet.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.image' => 'Entrez une image Svp !',
      ]

     );

      $formprojet = AjoutProjet::find($id);
      $formprojet->titreprojet = $request->input('titreprojet');
      $formprojet->descriptifprojet = $request->input('descriptifprojet');
       if($request->hasfile('image'))
       {
         $destination = 'uploads/projet'.$formprojet->image;
             if(File::exists($destination))
             {
               File::delete($destination); 
             }
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/projet/', $filename);
         $formprojet->image = $filename;
       }
         $formprojet->update();
         Flashy::success("Votre Projet recemment editée a été modifié avec succès !");
         return back();
    }


     public function updateformtemoignage(Request $request, $id)
    {
         $request->validate([

        'nom' => 'required|min:5',
        'provenance' => 'required|min:5',
        'message' => 'required|min:5',
        'image' => 'image'
      ],

      [
        'nom.required' => 'Ce champ est obligatoire',
        'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
        'provenance.required' => 'Ce champ est obligatoire',
        'provenance.min' => 'Ce champ doit contenir plus de 5 caratères',
        'message.required' => 'Ce champ est obligatoire',
        'message.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.image' => 'Entrez une image Svp !',
      ]

     );

      $formtemoignage = AjoutTemoignage::find($id);
      $formtemoignage->nom = $request->input('nom');
      $formtemoignage->provenance = $request->input('provenance');
      $formtemoignage->message = $request->input('message');
       if($request->hasfile('image'))
       {
         $destination = 'uploads/temoignage'.$formtemoignage->image;
             if(File::exists($destination))
             {
               File::delete($destination); 
             }
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/temoignage/', $filename);
         $formtemoignage->image = $filename;
       }
         $formtemoignage->update();
         Flashy::success("Votre Temoignage recemment editée a été modifié avec succès !");
         return back();
    }


     public function updateformintegration(Request $request, $id)
    {
         $request->validate([

        'titre' => 'required|min:5',
        'soustitre' => 'required|min:5',
        'categorie' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width=370,height=440|max:2048',
      ],

      [
        'titrebouton.required' => 'Ce champ est obligatoire',
        'titrebouton.min' => 'Ce champ doit contenir plus de 5 caratères',
        'soustitre.required' => 'Ce champ est obligatoire',
        'soustitre.min' => 'Ce champ doit contenir plus de 5 caratères',
        'titre.required' => 'Ce champ est obligatoire',
        'titre.min' => 'Ce champ doit contenir plus de 5 caratères',
        'image.required' => 'Entrez une image svp !',
        'image.image' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.mimes' => 'Entrez une image au format jpeg,png,gif, svg Svp !',
        'image.dimensions' => 'image doit être aux dimenssions 370x440',
        'image.max' => 'image lourde',

      ]

     );

      $formintegration = AjoutIntegration::find($id);
      $formintegration->titre = $request->input('titre');
      $formintegration->soustitre = $request->input('soustitre');
      $formintegration->categorie = $request->input('categorie');
       if($request->hasfile('image'))
       {
         $destination = 'uploads/integration'.$formintegration->image;
             if(File::exists($destination))
             {
               File::delete($destination); 
             }
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/integration/', $filename);
         $formintegration->image = $filename;
       }
         $formintegration->update();
         Flashy::success("Votre solution web recemment editée a été modifié avec succès !");
         return back();
    }

  public function updateformcertificat(Request $request, $id)
    {
         $request->validate([

        'libellecertificat' => 'required|min:5',
        'id_user' => 'required',
        'statut' => 'required',
        'files' => 'required|file|max:5000|mimes:doc,docx,pdf',
      ],

      [
        'libellecertificat.required' => 'Ce champ est obligatoire',
        'libellecertificat.min' => 'Ce champ doit contenir plus de 5 caratères',
        'id_user.required' => 'Ce champ est obligatoire !',
        'statut.required' => 'Ce champ est obligatoire !',
        'files.required' => 'Entrez un fichier Svp !',
        'files.file' => 'Entrez un fichier au format doc, docx, pdf Svp !',
        'files.mimes' => 'Entrez un fichier au format doc, docx, pdf Svp !',
        'files.max' => 'fichier lourd !',
      ]

     );

      $modifiercertificat = Certificat::find($id);
      $modifiercertificat->libellecertificat = $request->input('libellecertificat');
      $modifiercertificat->statut = $request->input('statut');
      $modifiercertificat->id_user = $request->input('id_user');
       if($request->hasfile('files'))
       {
         $destination = 'uploads/certificat'.$modifiercertificat->files;
             if(File::exists($destination))
             {
               File::delete($destination); 
             }
         $file = $request->file('files');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/certificat/', $filename);
         $modifiercertificat->files = $filename;
       }
         $modifiercertificat->update();
         Flashy::success("Vos modifcations ont été apporté avec succès !");
         return back();
    }


  public function updateformbourse(Request $request, $id)
    {
         $request->validate([

        'nom' => 'required|min:5',
        'participation' => 'required',
        'choixbourse' => 'required',
        'message'=> 'required',
        'statut'=> 'required'
      ],

      [
        'nom.required' => 'Ce champ est obligatoire',
        'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
        'participation.required' => 'Ce champ est obligatoire',
        'choixbourse.required' => 'Ce champ est obligatoire',
        'message.required' => 'Ce champ est obligatoire',
        'statut' => 'Ce champ est obligatoire',

      ]

     );

      $modifierbourse = Bourse::find($id);
      $modifierbourse->nom = $request->input('nom');
      $modifierbourse->participation = $request->input('participation');
      $modifierbourse->statut = $request->input('statut');
      $modifierbourse->message = $request->input('message');
      $modifierbourse->name = $request->input('name');
      $modifierbourse->id_user = $request->input('id_user');
      
         $modifierbourse->update();
         Flashy::success("Vos modifcations ont été apporté avec succès !");
         return back();
    }

 public function updateformdiplome(Request $request, $id)
    {
         $request->validate([

        'libellediplome' => 'required|min:5',
        'id_user' => 'required',
        'statut' => 'required',
        'files' => 'required|file|max:5000|mimes:doc,docx,pdf',
      ],

      [
        'libellediplome.required' => 'Ce champ est obligatoire',
        'libellediplome.min' => 'Ce champ doit contenir plus de 5 caratères',
        'id_user.required' => 'Ce champ est obligatoire !',
        'statut.required' => 'Ce champ est obligatoire !',
        'files.required' => 'Entrez un fichier Svp !',
        'files.file' => 'Entrez un fichier au format doc, docx, pdf Svp !',
        'files.mimes' => 'Entrez un fichier au format doc, docx, pdf Svp !',
        'files.max' => 'fichier lourd !',
      ]

     );

      $modifierdiplome = Diplome::find($id);
      $modifierdiplome->libellediplome = $request->input('libellediplome');
      $modifierdiplome->id_user = $request->input('id_user');
      $modifierdiplome->statut = $request->input('statut');

        if($request->hasfile('files'))
       {
         $destination = 'uploads/diplome'.$modifierdiplome->files;
             if(File::exists($destination))
             {
               File::delete($destination); 
             }
         $file = $request->file('files');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/diplome/', $filename);
         $modifierdiplome->files = $filename;
       }

      
         $modifierdiplome->update();
         Flashy::success("Vos modifcations ont été apporté avec succès !");
         return back();
    }


 public function DeleteAdminRdv($id)
    {
      $adminrdv = Rdv::find($id);
      $adminrdv->delete();
      Flashy::error("Le Rendez vous a été supprimé !");
      return back();
    }

 public function DeleteAdminFormation($id)
    {
      $adminformation = Formation::find($id);
      $adminformation->delete();
      Flashy::error("La demande a été supprimé !");
      return back();
    }

public function DeleteAdminContact($id)
    {
      $admincontact = FormContact::find($id);
      $admincontact->delete();
      Flashy::error("La demande de vous contacter a été supprimé !");
      return back();
    }

public function DeleteAdminEtude($id)
    {
      $adminetude = Etude::find($id);
      $adminetude->delete();
      Flashy::error("La demande a été supprimé !");
      return back();
    }

public function DeleteAdminIntegration($id)
    {
      $adminintegration = Integration::find($id);
      $adminintegration->delete();
      Flashy::error("La demande a été supprimé !");
      return back();
    }

public function DeleteAdminUtilisateur($id)
    {
      $adminutilisateur = User::find($id);
      $adminutilisateur->delete();
      Flashy::error("L'utilisateur a été supprimé !");
      return back();
    }

public function DeleteAdminStoreFormation($id)
    {
      $adminstoreformation = AjoutFormation::find($id);
      $adminstoreformation->delete();
      Flashy::error("La Formation a été supprimé !");
      return back();
    }

public function DeleteAdminStoreProjet($id)
    {
      $adminstoreprojet = AjoutProjet::find($id);
      $adminstoreprojet->delete();
      Flashy::error("Le Projet a été supprimé !");
      return back();
    }

public function DeleteAdminStoreTemoignage($id)
    {
      $adminstoretemoignage = AjoutTemoignage::find($id);
      $adminstoretemoignage->delete();
      Flashy::error("Le Temoignage a été supprimé !");
      return back();
    }

public function DeleteAdminStoreIntegration($id)
    {
      $adminstoreintegration = AjoutIntegration::find($id);
      $adminstoreintegration->delete();
      Flashy::error("La solution web a été supprimé !");
      return back();
    }

public function DeleteAdminStoreCertificat($id)
    {
      $adminstorecertificat = Certificat::find($id);
      $adminstorecertificat->delete();
      Flashy::error("Le certificat a été supprimé !");
      return back();
    }

public function DeleteAdminStoreBourse($id)
    {
      $adminstorebourse = Bourse::find($id);
      $adminstorebourse->delete();
      Flashy::error("Le demande de bourse a été supprimé !");
      return back();
    }

public function DeleteAdminStoreDiplome($id)
    {
      $adminstorediplome = Diplome::find($id);
      $adminstorediplome->delete();
      Flashy::error("Le diplome a été supprimé !");
      return back();
    }

}
