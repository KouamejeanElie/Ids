<?php

use Illuminate\Support\Facades\Route;
use App\AjoutFormation;
use App\AjoutProjet;
use App\AjoutTemoignage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $ListeLastFormations = AjoutFormation::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(8);
   $ListeLastProjets = AjoutProjet::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(3);
   $ListeLastTemoignages = AjoutTemoignage::where('created_at', '<=', date('Y-m-d H:i:s'))
                               ->orderBy('created_at' , 'desc')
                              ->paginate(6);
    return view('welcome',compact('ListeLastFormations','ListeLastProjets','ListeLastTemoignages'));
});

//Toutes les routes pour les pages publiques
Route::group([

     'prefix' => 'Pages'
], function(){
    Route::get('a-propos','AllPageController@showApropos')->name('path_a-propos');
    Route::get('contact','AllPageController@showContact')->name('path_contact');
    Route::get('blockchain','AllPageController@showBlockchain')->name('path_blockchain');
    Route::get('etude-conseil','AllPageController@showEtudeConseil')->name('path_etudeconseil');
    Route::get('integrateur-solution-informatique','AllPageController@showIntegrateur')->name('path_integrateur');
    Route::get('formation','AllPageController@showFormation')->name('path_formation');
    Route::get('recherchediplome','AllPageController@showRecherheDiplome')->name('path_recherche_diplome');
     Route::post('recherchediplome','AllPageController@FindDiplome')->name('path_find_diplome');
    Route::get('formation-single/{id}','AllPageController@showFormationSingle')->name('path_formation_single');
});

Route::group([
 
  'prefix' => 'A-propos'

],function(){
  
  Route::get('a-propos-formation','AllPageController@showAproposFormation')->name('path_serformation');
   Route::get('a-propos-blockchain','AllPageController@showAproposBlockchain')->name('path_serblockchain');
   Route::get('a-propos-integration','AllPageController@showAproposIntegration')->name('path_serintegration');
 
});


//Route pour stocker les rendez vous
Route::post('/sendrdv','AllPageController@sendrdv')->name('path_send_rdv');

//Route pour stocker les contacts
Route::post('/sendcontact','AllPageController@sendcontact')->name('path_send_contact');

//Route pour stocker les demandes de services d'audits & conseils
Route::post('/sendformationetude','AllPageController@sendformationetude')->name('path_send_formation_etude');

//Route pour stocker les demandes de formation
Route::post('/sendserviceformation','AllPageController@sendserviceformation')->name('path_send_service_formation');

//Route pour stocker les services blockchain
Route::post('/sendformationblockchain','AllPageController@sendformationblockchain')->name('path_send_formation_blockchain');

//Route pour stocker les demandes de services d'intégration
Route::post('/sendformationintegration','AllPageController@sendformationintegration')->name('path_send_formation_integration');


//Route pour acceder a l'administration
Route::group([

     'prefix' => 'Admin'
], function(){
    Route::get('admin/adminhome','AdminController@index')->name('path_admin_home')->middleware('is_admin');
});


//Route Admin pour acceder aux Forms
Route::group([

     'prefix' => 'Admin'
], function(){
    Route::get('formscontact','AdminController@showAdminContact')->name('path_admin_contact');
    Route::get('formsrdv','AdminController@showAdminRdv')->name('path_admin_rdv');
    Route::get('formsformation','AdminController@showAdminFormation')->name('path_admin_formation');
    Route::get('formsetudeconseil','AdminController@showAdminEtude')->name('path_admin_etudeconseil');
    Route::get('formsintegration','AdminController@showAdminIntegration')->name('path_admin_integration');
      Route::get('formsutilisateur','AdminController@showAdminUtilisateur')->name('path_admin_utilisateur');
    Route::get('storeformformation','AdminController@showAdminStoreFormation')->name('path_admin_storeformation');
    Route::get('storeformprojet','AdminController@showAdminStoreProjet')->name('path_admin_storeprojet');
    Route::get('storeformtemoignage','AdminController@showAdminStoreTemoignage')->name('path_admin_storetemoignage');
    Route::get('storeformintegration','AdminController@showAdminStoreIntegration')->name('path_admin_storeintegration');
    Route::get('storeformcertificat','AdminController@showAdminStoreCertificat')->name('path_admin_storecertificat');
    Route::get('storeformbourse','AdminController@showAdminStoreBourse')->name('path_admin_storebourse');
    Route::get('storeformdiplome','AdminController@showAdminStoreDiplome')->name('path_admin_storediplome');
});


//Store admin formation / projet / temoignage / certificat / diplome / docx

Route::group([

     'prefix' => 'Admin'
], function(){
    Route::post('storeformformation','AdminController@StoreFormation')->name('path_admin_store_formation');
    Route::post('storeformprojet','AdminController@StoreProjet')->name('path_admin_store_projet');
    Route::post('storeformtemoignage','AdminController@StoreTemoignage')->name('path_admin_store_temoignage');
    Route::post('storeformintegration','AdminController@StoreIntegration')->name('path_admin_store_integration');
    Route::post('storeformcertificat','AdminController@StoreCertificat')->name('path_admin_store_certificat');
    Route::post('storeformdiplome','AdminController@StoreDiplome')->name('path_admin_store_diplome');
});


//Route Admin action update
Route::group([

     'prefix' => 'Admin'
], function(){
  Route::get('storeformformationedit/{id}','AdminController@EditAdminStoreFormation')->name('path_edit_admin_storeformation');
  Route::get('storeformprojetedit/{id}','AdminController@EditAdminStoreProjet')->name('path_edit_admin_storeprojet');
  Route::get('storeformtemoignageedit/{id}','AdminController@EditAdminStoreTemoignage')->name('path_edit_admin_storetemoignage');
  Route::get('storeformintegrationedit/{id}','AdminController@EditAdminStoreIntegration')->name('path_edit_admin_storeintegration');
 Route::get('storeformcertificatedit/{id}','AdminController@EditAdminStoreCertificat')->name('path_edit_admin_storeformcertificat');
 Route::get('storeformbourseedit/{id}','AdminController@EditAdminStoreBourse')->name('path_edit_admin_storeformbourse');
 Route::get('storeformdiplomeedit/{id}','AdminController@EditAdminStoreDiplome')->name('path_edit_admin_storeformdiplome');
 Route::patch('storeformformationedit/{id}','AdminController@updateformformation');
 Route::patch('storeformprojetedit/{id}','AdminController@updateformprojet');
 Route::patch('storeformtemoignageedit/{id}','AdminController@updateformtemoignage');
 Route::patch('storeformintegrationedit/{id}','AdminController@updateformintegration');
 Route::patch('storeformcertificatedit/{id}','AdminController@updateformcertificat');
 Route::patch('storeformbourseedit/{id}','AdminController@updateformbourse');
 Route::patch('storeformdiplomeedit/{id}','AdminController@updateformdiplome');
});



//Route Admin action delete
Route::group([

     'prefix' => 'Admin'
], function(){
    Route::delete('formsrdv/{id}','AdminController@DeleteAdminRdv')->name('path_delete_admin_rdv');
    Route::delete('formsformation/{id}','AdminController@DeleteAdminFormation')->name('path_delete_admin_formation');
    Route::delete('formscontact/{id}','AdminController@DeleteAdminContact')->name('path_delete_admin_contact');
     Route::delete('formsetudeconseil/{id}','AdminController@DeleteAdminEtude')->name('path_delete_admin_etudeconseil');
     Route::delete('formsintegration/{id}','AdminController@DeleteAdminIntegration')->name('path_delete_admin_integration');
     Route::delete('formsutilisateur/{id}','AdminController@DeleteAdminUtilisateur')->name('path_delete_admin_utilisateur');
     Route::delete('storeformformation/{id}','AdminController@DeleteAdminStoreFormation')->name('path_delete_admin_store_formation');
     Route::delete('storeformprojet/{id}','AdminController@DeleteAdminStoreProjet')->name('path_delete_admin_store_projet');
     Route::delete('storeformtemoignage/{id}','AdminController@DeleteAdminStoreTemoignage')->name('path_delete_admin_store_temoignage');
      Route::delete('storeformintegration/{id}','AdminController@DeleteAdminStoreIntegration')->name('path_delete_admin_store_integration');
      Route::delete('storeformcertificat/{id}','AdminController@DeleteAdminStoreCertificat')->name('path_delete_admin_store_certificat');
      Route::delete('storeformbourse/{id}','AdminController@DeleteAdminStoreBourse')->name('path_delete_admin_store_bourse');
     Route::delete('storeformdiplome/{id}','AdminController@DeleteAdminStoreDiplome')->name('path_delete_admin_store_diplome');
});



//Routes access panel utilisateur
Route::group([

     'prefix' => 'Pages'
], function(){
    Route::get('certificat','HomeController@ShowCertificat')->middleware(['auth'])->name('path_utilisateur_certificat');
    Route::get('bourse','HomeController@ShowBourse')->middleware(['auth'])->name('path_utilisateur_bourse');
    Route::get('diplome','HomeController@ShowDiplome')->middleware(['auth'])->name('path_utilisateur_diplome');
    Route::get('profil','HomeController@ShowProfil')->middleware(['auth'])->name('path_utilisateur_profil');
});
//End routes

Route::group([

     'prefix' => 'Pages'
], function(){
    Route::patch('profil','HomeController@updateformprofil')->name('path_update_profil_utilisateur');
});
//End routes

//Store Bourse / utilisateur

Route::group([

     'prefix' => 'Admin'
], function(){
    Route::post('bourse','HomeController@StoreBourse')->name('path_utilisateur_store_bourse');
});

//



Auth::routes();

Route::get('/home', 'HomeController@index')->middleware(['auth'])->name('home');


