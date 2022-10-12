<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\User;
use App\Certificat;
use App\Bourse;
use App\Diplome;
use Flashy;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $totalCertificat = Certificat::where('statut', '=','Certificat Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         $totalDiplome = Diplome::where('statut', '=','Diplome Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         $totalBourse = Bourse::where('statut', '=','Acceptée')
                               ->where('id_user',Auth::user()->id)
                               ->count();
        $TotalLastbourses = Bourse::where('created_at', '<=', date('Y-m-d H:i:s'))
                                ->where('statut', '=', 'En cours')
                                ->where('id_user', Auth::user()->id)
                                ->count();
        $ListeLastBourses = Bourse::where('created_at','<=', date('Y-m-d H:i:s'))
                               ->where('id_user',Auth::user()->id)
                               ->where('statut', '=', 'En cours')
                               ->orderBy('created_at','desc')
                               ->paginate(5);
        return view('home',compact('totalCertificat','totalBourse','totalDiplome','ListeLastBourses','TotalLastbourses'));
    }

    public function ShowCertificat()
    {
         $totalCertificat = Certificat::where('statut', '=','Certificat Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         $totalDiplome = Diplome::where('statut', '=','Diplome Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->count();
          $totalBourse = Bourse::where('statut', '=','Acceptée')
                               ->where('id_user',Auth::user()->id)
                               ->count();
          $listeCertificatDispos = Certificat::where('statut', '=','Certificat Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->paginate(5);
        return view('Utilisateurs.Pages.certificat',compact('totalCertificat','listeCertificatDispos','totalBourse','totalDiplome'));
    }

    public function ShowBourse()
    {
        $totalCertificat = Certificat::where('statut', '=','Certificat Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         $totalDiplome = Diplome::where('statut', '=','Diplome Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         $totalBourse = Bourse::where('statut', '=','Acceptée')
                               ->where('id_user',Auth::user()->id)
                               ->count();
        $totalBourseEncours = Bourse::where('statut', '=','En cours')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         $totalBourseRefusee = Bourse::where('statut', '=','Refusée')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         $listeBoursesAcceptees = Bourse::where('statut', '=', 'Acceptée')
                                     ->where('id_user', Auth::user()->id)
                                     ->paginate(5);
         $listeBoursesEncours = Bourse::where('statut', '=', 'En cours')
                                     ->where('id_user', Auth::user()->id)
                                     ->paginate(5);
         $listeBoursesRefusees = Bourse::where('statut', '=', 'Refusée')
                                     ->where('id_user', Auth::user()->id)
                                     ->paginate(5);
         return view('Utilisateurs.Pages.bourse',compact('totalCertificat','listeBoursesAcceptees','totalBourse','totalDiplome','listeBoursesRefusees','totalBourseRefusee','totalBourseEncours','listeBoursesEncours'));
    }

    public function ShowDiplome()
    {
       $totalCertificat = Certificat::where('statut', '=','Certificat Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         $totalDiplome = Diplome::where('statut', '=','Diplome Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         $totalBourse = Bourse::where('statut', '=','Acceptée')
                               ->where('id_user',Auth::user()->id)
                               ->count();
        $listeDiplomeDispos = Diplome::where('statut', '=','Diplome Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->paginate(5);
         return view('Utilisateurs.Pages.diplome',compact('totalCertificat','totalBourse','totalDiplome','listeDiplomeDispos'));
    }


    public function ShowProfil()
    {
       $totalCertificat = Certificat::where('statut', '=','Certificat Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         $totalDiplome = Diplome::where('statut', '=','Diplome Disponible')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         $totalBourse = Bourse::where('statut', '=','Acceptée')
                               ->where('id_user',Auth::user()->id)
                               ->count();
         return view('Utilisateurs.Pages.profil',compact('totalCertificat','totalBourse','totalDiplome','listeDiplomeDispos'));
    }

    public function StoreBourse(Request $request)
    {
        $request->validate([

        'nom' => 'required|min:5',
        'participation' => 'required',
        'choixbourse' => 'required',
        'message'=> 'required',
      ],

      [
        'nom.required' => 'Ce champ est obligatoire',
        'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
        'participation.required' => 'Ce champ est obligatoire',
        'choixbourse.required' => 'Ce champ est obligatoire',
        'message.required' => 'Ce champ est obligatoire',

      ]

     );
       
       $ajoutbourse = new Bourse;
       $ajoutbourse->nom = $request->input('nom');
       $ajoutbourse->participation = $request->input('participation');
       $ajoutbourse->choixbourse = $request->input('choixbourse');
       $ajoutbourse->name = $request->input('name');
       $ajoutbourse->id_user = $request->input('id_user');
       $ajoutbourse->message = $request->input('message');
       
       $ajoutbourse->save();
         Flashy::success("Votre demande a été envoyé, l'équipe de IDS examinera votre demande !");
         return back();
    }

    public function updateformprofil(Request $request)
    {
        $this->validate($request, [
            
            'name' => 'required|string|max:255|min:5|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
        ],

        [
          'name.required' => 'Ce champ est obligatoire',
          'name.string' => 'Entrez des chaines de caractères',
          'name.max' => 'Nom utilisateur trop long',
          'name.min' => 'Nom utilisateur trop court',
          'name.unique' => 'Nom utilisateur dejà occupé',
          'email.required' => 'Ce champ est obligatoire',
          'email.string' => 'Entrez des chaines de caractères',
          'email.max' => 'Trop long, ne correponds pas',
          'email.unique' => 'Email dejà occupé',
        ]

    );
        $modifprofil = Auth::user();
        $modifprofil->name = $request['name'];
        $modifprofil->email = $request['email'];

        $modifprofil->save();
        Flashy::success("Votre profil a été mis à jour !");
        return back();
    }
}
