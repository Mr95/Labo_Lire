<?php


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
    return view('welcome');
});

Route::get('/equipes', function () {
    return view('Equipes_recherche');
});

Route::get('/productions', function () {
    return view('productions');
});

Route::get('/projets', function () {
    return view('projets');
});

Route::get('/manifestation', function () {
    return view('manifestation');
});

Route::get('/bilan', function () {
    return view('bilan');
});

Route::get('/bilan/{id}','Authentification@bilan' );

Route::get('/DetailBilan','pagescontroller@bilan' );

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/consulterEquipe', function () {
    return view('consulterEquipe');
});





/*Route::get('/login' ,[
    'uses'=> 'Authentification@loginpage'  
]);*/

/* https://www.youtube.com/watch?v=H3uRXvwXz1o&feature=youtu.be */

//Route::get('users/{id}','pagescontroller@user');
//Route::resource('list', 'Authentification');


/**********************************Authentification Routing**************************************/


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::post('/login/custom',[
    'uses'=>'Authentification@login' , 
    'as' => 'login.custom'
]);

Route::get('/logout','Authentification@logout');

Route::get('NotFound', 'pagescontroller@notfound');

/********************************Routing  Directeur Labo pages*************************************/

Route::get('Directeur', 'pagescontroller@Directeur');

Route::get('Directeur/MotDescription','pagescontroller@MotDescription');

Route::get('Directeur/NouvelleEquipe', 'pagescontroller@NouvelleEquipe');

Route::get('Directeur/DesignerCreerChefEquipe', 'pagescontroller@DesignerCreerChefEquipe');

Route::get('Directeur/DesignerListe', 'pagescontroller@DesignerListe');

Route::get('Directeur/CreeChefEquipe', 'pagescontroller@CreeChefEquipe');

Route::get('Directeur/LicenciementEquipe', 'pagescontroller@LicenciementEquipe');

Route::get('Directeur/ReactivationEquipe', 'pagescontroller@ReactivationEquipe');

Route::get('Directeur/ConsulterEquipes', 'pagescontroller@ConsulterEquipes');

Route::get('Directeur/ConsulterMems', 'pagescontroller@ConsulterMems');

Route::get('Directeur/ConsulterMemsProfil', 'pagescontroller@ConsulterMemsProfil');

Route::get('Directeur/ConsulterProfileMembre/{id}','Directeur_labo_Controller@consulterProfileMEM');

Route::get('Directeur/CreeChefEquipefromId/{id}','Directeur_labo_Controller@CreeChefEquipefromId');

Route::get('Directeur/LicenciementEquipe/{id}', 'Directeur_labo_Controller@LicenciementEquipe');

Route::get('Directeur/ReactivationEquipe/{id}', 'Directeur_labo_Controller@ReactivationEquipe');

Route::get('Directeur/DetailEquipe', 'pagescontroller@DirecteurDetailEquipe');

Route::get('Directeur/ConsulterDetailEquipe/{id}', 'Directeur_labo_Controller@DirecteurDetailEquipe');

Route::get('Directeur/Manifestation', 'pagescontroller@DirecteurManifestation');

Route::post('/Directeur/Manifestation',[
        'uses'=>'Directeur_labo_Controller@DirecteurManifestation'  ,
        'as'=>'Directeur.Manifestation'

]);


/* Profile directeur */
Route::get('Directeur/Profil', 'pagescontroller@Profildirecteur');

Route::Post('/Directeur/Profil',[
    
    'uses'=>'Directeur_labo_Controller@Profildirecteur' ,
    'as' => 'Directeur.Profil'
    
    ]);

/* */
/* Production scientifiques */

Route::get('Directeur/ConsulterProduction', 'pagescontroller@DirecteurConsulterProduction');

Route::get('Directeur/ConsulterProduction/{id_membre_demandeur}/{id_1_auteur}/{id_prod}','Directeur_labo_Controller@demanderCoAuteur');

Route::get('Directeur/MesProduction', 'pagescontroller@DirecteurMesProduction');

Route::get('Directeur/MesProduction/{rang}/{id_coauteur}/{id_prod}/{action}', 'Directeur_labo_Controller@DirecteurMesProduction');

Route::get('Directeur/Coauteur_externe/{id}','Directeur_labo_Controller@AjouterCoauteurExterne');

Route::get('Directeur/Designer_Coauteur_externe','pagescontroller@AjouterCoauteurExterneDL');

Route::post('/Designer/CoauteurExt',[

    'uses'=>'Directeur_labo_Controller@AjoutéCoauteurExt' ,
    'as'=> 'Designer.CoauteurExt'

]);


/* */


Route::post('/Directeur/NouvelleEquipe',[

   'uses'=>'Directeur_labo_Controller@nouvelleEquipe' ,
   'as'  =>   'Directeur.NouvelleEquipe'

]);


Route::post('Directeur/CreeChefEquipe',[

    'uses'=> 'Directeur_labo_Controller@CreeChefEquipe' , 
    'as' => 'Directeur.CreeChefEquipe'

]);


Route::post('/Directeur/MotDescription',[

    'uses'=>'Directeur_labo_Controller@MotDescription' ,
    'as'=>'Directeur.MotDescription'

]);


Route::get('Directeur/Etablissement_Bilan', 'pagescontroller@etablir_bilan');
Route::post('/Directeur/Bilan', [
    'uses'=>'Directeur_labo_Controller@Bilan' ,
    'as'=>'Directeur.Bilan'
]);

/**********************************Routing Chef Equipe Pages*****************************************/

Route::post('/Chef_Equipe/creerMembre', [

    'uses'=>'Chef_equipe_Controller@createMembre' , 
    'as' => 'Chef_Equipe.creerMembre'

]);

Route::get('Chef_Equipe', 'pagescontroller@ChefEquipe');

Route::get('Chef_Equipe/nouveau_membre', 'pagescontroller@ChefEquipeNouveauMembre');

Route::get('Chef_Equipe/Description', 'pagescontroller@ChefEquipeDescription');

Route::post('/Chef_Equipe/Description', [

    'uses'  => 'Chef_equipe_Controller@DescriptionEquipe' ,
    'as'    => 'Chef_Equipe.Description'

]);

/*pour que le chef equip change son mot de passe et met son nom et pre */
Route::get('Chef_Equipe/Nouveau', 'pagescontroller@NouveauPasswordChefEquipe');

Route::post('/Chef_Equipe/Nouveau', [

    'uses' => 'ModifierCompteController@NouveauPasswordChefEquipe' ,
    'as'  => "Chef_Equipe.Nouveau"
]);


Route::get('Chef_Equipe/ConsulterMembre', 'pagescontroller@ChefEquipeConsulterMembre');

Route::get('Chef_Equipe/ConsulterProfileMembre','pagescontroller@ChefEquipeConsulterProfileMembre');

Route::get('Chef_Equipe/ConsulterProfileMembre/{id}','Chef_equipe_Controller@consulterProfileMEM');

Route::get('Chef_Equipe/ConsulterProfilePerso','pagescontroller@ConsulterProfilePerso');

Route::post('/Chef_Equipe/ConsulterProfilePerso', [
    'uses'=>'Chef_equipe_Controller@CEProfile'  ,
    'as'=>'Chef_Equipe.ConsulterProfilePerso'
    
    ]);


Route::get('Chef_Equipe/DesignerChefProjet', 'pagescontroller@DesignerChefProjet');   

Route::get('Chef_Equipe/DesignerChefProjet/{id}', 'Chef_equipe_Controller@DesignerChefProjet');

Route::get('Chef_Equipe/designer_membre', 'pagescontroller@ChefEquipeDesignermembre');
//pour qu'un CE peut desinger un membre a son equipe
Route::get('Chef_Equipe/designer_membre/{id}/{id_equipe}','Chef_equipe_Controller@ChefEquipeDesignermembre');


/* Productions scientifique */
   
Route::get('Chef_Equipe/ConsulterProduction', 'pagescontroller@ChefEquipeConsulterProduction');

Route::get('Chef_Equipe/ConsulterProduction/{id_membre_demandeur}/{id_1_auteur}/{id_prod}','Chef_equipe_Controller@demanderCoAuteur');

Route::get('Chef_Equipe/MesProduction', 'pagescontroller@ChefEquipeMesProduction');

Route::get('Chef_Equipe/MesProduction/{rang}/{id_coauteur}/{id_prod}/{action}', 'Chef_equipe_Controller@ChefEquipeMesProduction');

/* CoauteurExterne  */

Route::get('Chef_Equipe/Coauteur_externe/{id}','Chef_equipe_Controller@AjouterCoauteurExterne');

Route::get('Chef_Equipe/Designer_Coauteur_externe','pagescontroller@AjouterCoauteurExterneCE');

Route::post('/Designer/CoauteurExtCE',[

    'uses'=>'Chef_equipe_Controller@AjoutéCoauteurExt' ,
    'as'=> 'Designer.CoauteurExtCE'

]);


/** a impl*****/


Route::get('Chef_Equipe/ConsulterEquipe', 'pagescontroller@ChefEquipeConsulterEquipe');




/***********************************Routing Chef projet Pages******************************************/

Route::get('Chef_Projet', 'pagescontroller@ChefProjet');

Route::get('Chef_Projet/CreerProjet', 'pagescontroller@CreerProjet');


Route::get('Chef_Projet/ModifierProjet', 'pagescontroller@modifierProjet');

Route::get('Chef_Projet/ModifierProjet/{id}', 'Chef_projet_Controller@modifierProjetSes');

Route::get('Chef_Projet/MettreAjourProjet', 'pagescontroller@MettreAjourProjet');

Route::post('Chef_Projet/MettreAjourProjet', [

    'uses'=>'Chef_projet_Controller@modifierProjet' ,
    'as'=>'Chef_Projet.MettreAjourProjet'

]);





Route::get('Chef_Projet/ConsulterProjet', 'pagescontroller@consulterProjet');

Route::get('Chef_Projet/ConsulterProjet/{id}', 'Chef_projet_Controller@consulteProjet');

Route::get('Chef_Projet/ConsulterDetailProjet', 'pagescontroller@ConsulterDetailProjet');


Route::get('Chef_Projet/DesignerParticipantProjet', 'pagescontroller@DesignerParticipantProjet');
//pour avoir la liste des membres de la meme equipe pour choisir un a designer
Route::get('Chef_Projet/ListeMembre', 'pagescontroller@ListeMembreCP');

Route::get('Chef_Projet/ListeMembre/{id}', 'Chef_projet_Controller@ListeMembreCP');

Route::get('Chef_Projet/DesignerParticipantProjet/{id_membre}/{id_projet}', 'Chef_projet_Controller@designerParticipant');


Route::get('Chef_Projet/ModifierParticipantProjet', 'pagescontroller@ModifierParticipantProjet');
Route::get('Chef_Projet/ModifierListParticipantProjet/{id}', 'Chef_projet_Controller@ModifierListParticipantProjet');
Route::get('Chef_Projet/ModifierListParticipantProjet', 'pagescontroller@ModifierListParticipantProjet');
Route::get('Chef_Projet/SupprimerParticipantProjet/{id_membre}/{id_projet}', 'Chef_projet_Controller@SupprimerParticipantProjet');
Route::get('Chef_Projet/RemplacerParticipantProjet/{id_membre}/{id_projet}', 'Chef_projet_Controller@RemplacerParticipantProjet');
Route::get('Chef_Projet/ListParticipantRemplacant', 'pagescontroller@ListParticipantRemplacant');
Route::get('Chef_Projet/ModifierParticipant/{id_ancien_membre}/{id_projet}/{id_nouveau_membre}', 'Chef_projet_Controller@modifierParticipant');



Route::get('Chef_Projet/ConsulterParticipantProjet', 'pagescontroller@ConsulterParticipantProjet');
Route::get('Chef_Projet/ConsulterListParticipantProjet/{id}', 'Chef_projet_Controller@ConsulterListParticipantProjet');
Route::get('Chef_Projet/ConsulterListParticipantProjet', 'pagescontroller@ConsulterListParticipantProjet');
Route::get('Chef_Projet/ConsulterProfilParticipantProjet/{id}', 'Chef_projet_Controller@ConsulterProfilParticipantProjet');
Route::get('Chef_Projet/ConsulterProfilParticipantProjet', 'pagescontroller@ConsulterProfilParticipantProjet');


Route::post('/Chef_Projet/CreerProjet', [
 
   'uses' => 'Chef_projet_Controller@creerProjet' ,
   'as'=>'Chef_Projet.CreerProjet' 

    
]);

/**profile**/

Route::get('Chef_Projet/Profil', 'pagescontroller@ChefProjetProfil');

Route::post('/Chef_Projet/Profil', [
    'uses'=>'Chef_projet_Controller@Chef_projetProfil'  ,
    'as'=>'Chef_Projet.Profil'
    
    ]);

/**Production**/    


Route::get('Chef_Projet/ConsulterProduction', 'pagescontroller@ChefProjetConsulterProduction');

Route::get('Chef_Projet/ConsulterProduction/{id_membre_demandeur}/{id_1_auteur}/{id_prod}','Chef_projet_Controller@demanderCoAuteur');

Route::get('Chef_Projet/MesProduction', 'pagescontroller@ChefProjetMesProduction');

Route::get('Chef_Projet/MesProduction/{rang}/{id_coauteur}/{id_prod}/{action}', 'Chef_projet_Controller@ChefProjetMesProduction');

/* CoauteurExterne  */

Route::get('Chef_Projet/Coauteur_externe/{id}','Chef_projet_Controller@AjouterCoauteurExterne');

Route::get('Chef_Projet/Designer_Coauteur_externe','pagescontroller@AjouterCoauteurExterneCP');

Route::post('/Designer/CoauteurExtCP',[

    'uses'=>'Chef_projet_Controller@AjoutéCoauteurExt' ,
    'as'=> 'Designer.CoauteurExtCP'

]);


/***********************************Routing Memebre Pages******************************************/


Route::get('Membre', 'pagescontroller@membre');

Route::get('Membre/Profile', 'pagescontroller@MembreProfile');

Route::get('Membre/Nouveau', 'pagescontroller@NouveauPassword');

Route::get('Membre/ConsulterProduction', 'pagescontroller@MembreConsulterProduction');

Route::get('Membre/ConsulterProduction/{id_membre_demandeur}/{id_1_auteur}/{id_prod}','Membre_Controller@demanderCoAuteur');

Route::get('Membre/MesProduction', 'pagescontroller@MembreMesProduction');

Route::get('Membre/MesProduction/{rang}/{id_coauteur}/{id_prod}/{action}', 'Membre_Controller@MembreMesProduction');

Route::post('/Membre/Nouveau', [

    'uses' => 'ModifierCompteController@new_password' ,
    'as'  => "Membre.Nouveau"
]);

Route::post('/Membre/Profile', [
    'uses'=>'Membre_Controller@MembreProfile'  ,
    'as'=>'Membre.Profile'
    
    ]);

/* coauteur externe */
    Route::get('Membre/Coauteur_externe/{id}','Membre_Controller@AjouterCoauteurExterne');

    Route::get('Membre/Designer_Coauteur_externe','pagescontroller@AjouterCoauteurExterneMEM');
    
    Route::post('/Designer/CoauteurExtMEM',[
    
        'uses'=>'Membre_Controller@AjoutéCoauteurExt' ,
        'as'=> 'Designer.CoauteurExtMEM'
    
    ]);
    





/*****Download Productions ****/


Route::get('Download/Justificatif/{id}','Authentification@downloadProduction');






/***********************************************************************************/

/*****************************test simple ************************** */
Route::get('/menu', function () {
    return view('MenuLogin');
});


Route::get('/menu/m', function () {
    return view('members/MenuLogin');
});


Route::resource('user', 'LaboController');

Route::get('/menu', function () {
    return view('MenuLogin');
});

/* trying to create new account */
Route::get('create','Authentification@createUser') ;

Route::post('/creat/count',[
    'uses'=>'Authentification@createUser' , 
    'as' => 'create.count'
]);


/*  uploade file */

Route::get('/menu', function () {
    return view('MenuLogin');
});

Route::post('/upload/file', [

    'uses' => 'pagescontroller@uploadFile' ,
    'as'   => 'upload.file'


]);