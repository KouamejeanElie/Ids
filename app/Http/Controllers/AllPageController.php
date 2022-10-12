<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rdv;
use Flashy;
use App\FormContact;
use App\Etude;
use App\Blockchain;
use App\Formation;
use App\Integration;
use App\AjoutFormation;
use App\AjoutIntegration;
use App\AjoutProjet;
use App\Diplome;

class AllPageController extends Controller
{
    public function showApropos()
    {
         $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        return view('Pages.a-propos',compact('ListeLastProjets'));
    }

    public function showEtudeConseil()
    {
         $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        return view('Pages.etude-conseil',compact('ListeLastProjets'));
    }

    public function showFormation()
    {
         $ListeLastFormations = AjoutFormation::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(8);
        $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        return view('Pages.formation',compact('ListeLastFormations','ListeLastProjets'));
    }

    public function showFormationSingle($id)
    {
          $ListeLastFormations = AjoutFormation::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->where('id',$id)
                               ->orderBy('created_at' , 'desc')
                               ->get();
         $RecentesFormations = AjoutFormation::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(8);
        $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        return view('Pages.formation-single',compact('ListeLastProjets','ListeLastFormations','RecentesFormations'));
    }

    public function showBlockchain()
    {
         $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        return view('Pages.blockchain',compact('ListeLastProjets'));
    }

    public function showIntegrateur()
    {
         $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        $listeAllIntegrations = Ajoutintegration::paginate(6);
        return view('Pages.integrateur-solution-informatique',compact('ListeLastProjets','listeAllIntegrations'));
    }

    public function showContact()
    {
         $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        return view('Pages.contact',compact('ListeLastProjets'));
    }

    public function showAproposFormation()
    {
         $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        return view('A-propos.a-propos-formation',compact('ListeLastProjets'));
    }

    public function showAproposBlockchain()
    {
         $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        return view('A-propos.a-propos-blockchain',compact('ListeLastProjets'));
    }

     public function showAproposIntegration()
    {
         $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        return view('A-propos.a-propos-integration',compact('ListeLastProjets'));
    }

    public function showRecherheDiplome()
    {
        $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        return view('Pages.recherchediplome',compact('ListeLastProjets'));
    }

    public function FindDiplome(Request $request)
    {
        $request->validate([
           
           'refdiplome'=>'required|min:10|max:10',

        ],

        [
           'refdiplome.required'=>'Entrez la référence du Diplome',
           'refdiplome.min'=>'Veuillez vérifier la référence saisie !',
           'refdiplome.max'=>'Veuillez vérifier la référence saisie !'
        ]

    );
        $search = $request->input('refdiplome');
        $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
        $finddiplomes = Diplome::where('id_diplome', 'like', '%' .$search)
                                ->paginate(10);
        $TotalSearch = Diplome::where('id_diplome', 'like', '%' .$search)
                                ->count();
        return view('Pages.resultatrecherche',compact('ListeLastProjets','finddiplomes','TotalSearch'));
    }

    function sendrdv(Request $request)
    {
         $request->validate([
           
         'nom' => 'required|min:5',
         'mail' => 'required|email',
         'tel' => 'required|digits:10',
         'daterdv' => 'required',
         'heurerdv' => 'required',
         'services' => 'required'
        ],

        [
            'nom.required' => 'Ce champ est obligatoire',
            'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
            'tel.required' => 'Ce champ est obligatoire',
            'tel.digits' => 'Ce champ doit comporter 10 valeurs numériques',
            'mail.required' => 'Ce champ est obligatoire',
            'mail.email' => 'Entrez une adresse email valide',
            'daterdv.required' => 'Ce champ est obligatoire',
            'heurerdv.required' => 'Ce champ est obligatoire',
            'services.required' => 'Ce champ est obligatoire',

        ]

    );

        $createrdv = new Rdv([
         
          'nom' => $request->get('nom'),
          'tel' => $request->get('tel'),
          'mail' => $request->get('mail'),
          'daterdv' => $request->get('daterdv'),
          'heurerdv' => $request->get('heurerdv'),
          'services' => $request->get('services'),

        ]);

        $createrdv->save();
        Flashy::success('Votre demande de rendez vous a été envoyé !');
        return back();
    }

    function sendcontact(Request $request)
    {
        $request->validate([
            
            'identite' => 'required|min:5',
            'contact' => 'required|digits:10',
            'mailcontact' => 'required|email',
            'message' => 'required'
        ],

        [
           'identite.required' => 'Ce champ est obligatoire',
           'identite.min' => 'Ce champ doit contenir plus de 5 caratères',
           'contact.required' => 'ce champ est obligatoire',
           'mailcontact.required' => 'Ce champ est obligatoire',
           'mailcontact.email' => 'Renseignez une adresse email valide',
           'contact.digits' => 'Ce champ doit comporter 10 valeurs numériques',
           'message' => 'Ce champ est obligatoire',
        ]

     );

        $createcontact = new FormContact([
            
            'identite' => $request->get('identite'),
            'contact' => $request->get('contact'),
            'mailcontact' => $request->get('mailcontact'),
            'message' => $request->get('message'),
        ]);

        $createcontact->save();
        Flashy::success("Votre demande a été envoyé !");
        return back();
    }

    function sendformationetude(Request $request)
    {
        $request->validate([

            'nom' => 'required|min:5',
            'emailformation' => 'required|email',
            'contact' => 'required|digits:10',
            'formations' => 'required'

        ],

        [
          'nom.required' => 'Ce champ est obligatoire',
          'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
          'emailformation.required' => 'ce champ est obligatoire',
          'emailformation.email' => 'Entrez une adresse email valide',
          'contact.required' => 'Ce chap est obligatoire',
          'contact.digits' => 'Ce champ doit comporter 10 valeurs numériques',
          'formations.required' => 'Ce champ est obligatoire',

        ]

     );

        $createdformationetude = new Etude([

            'nom' => $request->get('nom'),
            'emailformation' => $request->get('emailformation'),
            'contact' => $request->get('contact'),
            'formations' => $request->get('formations'),

        ]);

        $createdformationetude->save();
        Flashy::success("Votre Insscription a été effectué avec succès !");
        return back();
    }

    function sendserviceformation(Request $request)
    {
        $request->validate([

           'nom' => 'required|min:5',
           'emailformation' => 'required|email',
           'contact' => 'required|digits:10',
           'formations' => 'required'
        ],

        [
          'nom.required' => 'Ce champ est obligatoire',
          'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
          'emailformation.required' => 'ce champ est obligatoire',
          'emailformation.email' => 'Entrez une adresse email valide',
          'contact.required' => 'Ce chap est obligatoire',
          'contact.digits' => 'Ce champ doit comporter 10 valeurs numériques',
          'formations.required' => 'Ce champ est obligatoire',
        ]

    );

        $createserviceformation = new Formation([
             
             'nom' => $request->get('nom'),
             'emailformation' => $request->get('emailformation'),
             'contact' => $request->get('contact'),
             'formations' => $request->get('formations'),
        ]);

        $createserviceformation->save();
        Flashy::success("Votre Inscription a été effectué avec succès !");
        return back();
    }

    function sendformationblockchain(Request $request)
    {
        $request->validate([
           'nom' => 'required|min:5',
           'emailformation' => 'required|email',
           'contact' => 'required|digits:10',
           'formations' => 'required'
        ],

        [
      
          'nom.required' => 'Ce champ est obligatoire',
          'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
          'emailformation.required' => 'ce champ est obligatoire',
          'emailformation.email' => 'Entrez une adresse email valide',
          'contact.required' => 'Ce chap est obligatoire',
          'contact.digits' => 'Ce champ doit comporter 10 valeurs numériques',
          'formations.required' => 'Ce champ est obligatoire',

        ]

     );

        $createformationblockchain = new Blockchain([

             'nom' => $request->get('nom'),
             'emailformation' => $request->get('emailformation'),
             'contact' => $request->get('contact'),
             'formations' => $request->get('formations'),
        ]);

        $createformationblockchain->save();
        Flashy::success("Votre demande a été effectué avec succès !");
        return back();
    }

    function sendformationintegration(Request $request)
    {
        $request->validate([
           
           'nom' => 'required|min:5',
           'emailformation' => 'required|email',
           'contact' => 'required|digits:10',
           'formations' => 'required'
        ],

        [
          'nom.required' => 'Ce champ est obligatoire',
          'nom.min' => 'Ce champ doit contenir plus de 5 caratères',
          'emailformation.required' => 'ce champ est obligatoire',
          'emailformation.email' => 'Entrez une adresse email valide',
          'contact.required' => 'Ce chap est obligatoire',
          'contact.digits' => 'Ce champ doit comporter 10 valeurs numériques',
          'formations.required' => 'Ce champ est obligatoire',
        ]

     );

        $createformationintegration = new Integration([

             'nom' => $request->get('nom'),
             'emailformation' => $request->get('emailformation'),
             'contact' => $request->get('contact'),
             'formations' => $request->get('formations'),
        ]);

        $createformationintegration->save();
        Flashy::success("Votre demande a été effectué avec succès ! ");
        return back();
    }
}
