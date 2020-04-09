<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash ;
use Mail;

class Chef_projet_Controller extends Controller
{
    


    public function creerProjet(Request $request){

        $titre = $request->titre ;
        $domaine_recherche = $request->drecherche ;
        $code_projet = $request->code_projet; 
        $date_creation = $request->date_creation ;
        $date_soumission = $request->date_soumission ;
        $etat_projet = $request->etat_projet ;
        $description_projet =$request->description_projet ;
        $partenaire = $request->partenaire ;
        $avancement = $request->avancement ;

        $id_CP = $request->session()->get('id_CP');


        if($etat_projet == 'En cours'){

            $id = 0 ;

           $prjs =  DB::select('select * from membres,projets,participations where membres.id = participations.id_membre and projets.id = participations.id_projet and projets.etat =  ?  and membres.id = ? ', ['En cours', $id_CP]);

           foreach($prjs as $prj){

            $id = $prj->id_membre ;

           }
          
           if($id !== 0){

               return 'vous avez deja un projet en cours'  ; 

           }else{

            
            $count1 =    DB::insert('insert into projets (titre_projet , domaine_recherche , description ,code , date_creation , date_soumission , nombre_participant , avancement , etat ,partenaire) values (?,?,?,?,?,?,?,?,?,?)',
                [$titre,$domaine_recherche,$description_projet,$code_projet,$date_creation , $date_soumission ,1, $avancement,$etat_projet,$partenaire]);
       
               
                if($count1 > 0 ){
       
                   $projets = DB::select('select id from projets where titre_projet = ? and domaine_recherche =? and description=? and code =? and date_creation =? and date_soumission = ? ', [$titre,$domaine_recherche,$description_projet,$code_projet,$date_creation , $date_soumission]);
       
                   foreach($projets as $projet){
       
                       $id_projet = $projet->id ;
       
                   }
       
       
                  $count2 =  DB::insert('insert into participations (id_membre,id_projet) values (?,?)',[$id_CP , $id_projet]);
       
       
                  if($count2 > 0){
       
                   return 'Projet creé' ;
       
                  }

                }
           
            }

        }else{

            

            $count3 =    DB::insert('insert into projets (titre_projet , domaine_recherche , description ,code , date_creation , date_soumission , nombre_participant , avancement , etat ,partenaire) values (?,?,?,?,?,?,?,?,?,?)',
                [$titre,$domaine_recherche,$description_projet,$code_projet,$date_creation , $date_soumission ,1,$avancement,$etat_projet,$partenaire]);
       
               
                if($count3 > 0 ){
       
                   $projets = DB::select('select id from projets where titre_projet = ? and domaine_recherche =? and description=? and code =? and date_creation =? and date_soumission = ? ', [$titre,$domaine_recherche,$description_projet,$code_projet,$date_creation , $date_soumission]);
       
                   foreach($projets as $projet){
       
                       $id_projet = $projet->id ;
       
                   }
       
       
                  $count4 =  DB::insert('insert into participations (id_membre,id_projet) values (?,?)',[$id_CP , $id_projet]);
       
       
                  if($count4 > 0){
       
                   return 'Projet creé' ;
       
                  }
       
       
                } 



        }

    }


    public function consulteProjet($id , Request $request){


        $request->session()->put('id_projet',$id);

        return redirect('Chef_Projet/ConsulterDetailProjet');


    }


    public function modifierProjetSes($id , Request $request){

        $request->session()->put('id_projet', $id);


        return redirect('Chef_Projet/MettreAjourProjet') ;

    }


    public function modifierProjet(Request $request){



       $count = DB::update('update projets set titre_projet = ? , domaine_recherche = ?, description = ? ,date_soumission=? , date_creation=? , avancement=? , etat=? , code=? ,partenaire=? where id = ?',
        [$request->titre,$request->drecherche,$request->description_projet,$request->date_soumission,$request->date_creation,$request->avancement,$request->etat_projet,$request->code_projet,$request->partenaire,$request->id]);
        
        
        if($count > 0){

            return 'Projet Modifier' ;

        }else{

            return 'modification echoué';
        }
        
        
    }


    /*designer participant */

    public function designerParticipant($id_membre,$id_projet,Request $request){


       $projets =  DB::select('select * from projets where id = ?', [$id_projet]) ;

       foreach($projets as $projet){


        $nombre_participant = $projet->nombre_participant ;
        $nom_projet = $projet->titre_projet ;
         $etat_projet = $projet->etat ;   


       }

       if($nombre_participant > 5 ){

      
              return redirect('Chef_Projet/ListeMembre')->with('status1', 'vous pouvez designer que '. $nombre_participant . ' membres');

       
        }else{


            if($etat_projet =='En cours'){

                   
                 $id_prj = 0 ;
                                                                                         
                 $participations =  DB::select('select * from projets , participations , membres   where membres.id = participations.id_membre and projets.id = participations.id_projet and membres.id = ? and projets.etat = ? ', [$id_membre,'En cours']);


                    foreach($participations as $participation){

                            $id_prj = $participation->id ;
                            $participant = $participation->nombre_participant ;
                            $nm = $participation->titre_projet ;
                        
                        }


                            if($id_prj > 0 ){

                                $count1 = DB::update('update participations set id_projet = ? where id_projet = ? and id_membre = ?', [$id_projet,$id_prj,$id_membre]);

                                    if($count1 > 0 ){

                                        $nombre_participant = $nombre_participant + 1 ;

                                        $participant = $participant -1 ;

                                        DB::update('update projets set nombre_participant = ? where id = ?', [$nombre_participant,$id_projet]);

                                        DB::update('update projets set nombre_participant = ? where id = ?', [$participant,$id_prj]);

                                        DB::insert('insert historique  (id_membre,evenement,nom_projet) values (?,?,?)', [$id_membre,'designer',$nom_projet]);

                                        DB::insert('insert historique  (id_membre,evenement,nom_projet) values (?,?,?)', [$id_membre,'licencié',$nm]);

                                        return redirect('Chef_Projet/ListeMembre')->with('status', 'Membre bien designé');


                                    }



                            }else{


                                $count2 = DB::insert('insert into participations (id_projet,id_membre) values (?, ?)', [$id_projet,$id_membre]);

                                if($count2 > 0 ){

                                    $nombre_participant = $nombre_participant + 1 ;

                                    DB::update('update projets set nombre_participant = ? where id = ?', [$nombre_participant,$id_projet]);

                                    DB::insert('insert historique  (id_membre,evenement,nom_projet) values (?,?,?)', [$id_membre,'designer',$nom_projet]);

                                    return redirect('Chef_Projet/ListeMembre')->with('status', 'Membre bien designé');


                                }

                            }

            
            
            
            }elseif($etat_projet =='Completé'){


                if($nombre_participant > 5 ){

      
                    return redirect('Chef_Projet/ListeMembre')->with('status1', 'vous pouvez designer que '. $nombre_participant . ' membres');
      
             
              }else{


                $count= DB::insert('insert into participations (id_projet,id_membre) values (?, ?)', [$id_projet,$id_membre]);

                if($count > 0 ){

                    $nombre_participant = $nombre_participant + 1 ;

                    DB::update('update projets set nombre_participant = ? where id = ?', [$nombre_participant,$id_projet]);

                    DB::insert('insert historique  (id_membre,evenement,nom_projet) values (?,?,?)', [$id_membre,'designer',$nom_projet]);

                    return redirect('Chef_Projet/ListeMembre')->with('status', 'Membre bien designé');


                }
 
              }

               


            }elseif($etat_projet =='Echoué'){



                if($nombre_participant > 5 ){

      
                    return redirect('Chef_Projet/ListeMembre')->with('status1', 'vous pouvez designer que '. $nombre_participant . ' membres');
      
             
                 }else{


                  $count= DB::insert('insert into participations (id_projet,id_membre) values (?, ?)', [$id_projet,$id_membre]);

                    if($count > 0 ){

                       $nombre_participant = $nombre_participant + 1 ;

                       DB::update('update projets set nombre_participant = ? where id = ?', [$nombre_participant,$id_projet]);

                       DB::insert('insert historique  (id_membre,evenement,nom_projet) values (?,?,?)', [$id_membre,'designer',$nom_projet]);

                      return redirect('Chef_Projet/ListeMembre')->with('status', 'Membre bien designé');


                }
 
              }




            }


        
    



       


       }





       

     //   return 'id membre : '. $id_membre . ' id projet : ' .$id_projet ;

    }


    public function ListeMembreCP($id,Request $request){


        $request->session()->put('id_projet_a_designer', $id);


        return redirect('Chef_Projet/ListeMembre');


    }

    /*modifier participant */
    public function ModifierListParticipantProjet($id,Request $request){

        $request->session()->put('id_projet_a_modifier', $id);

        return redirect('Chef_Projet/ModifierListParticipantProjet');


    }


    public function SupprimerParticipantProjet($id_membre,$id_projet,Request $request){


      $projets = DB::select('select * from projets where id = ?', [$id_projet]);

        foreach($projets as $projet){

            $nombre_participant  = $projet->nombre_participant ;
            $nom_projet = $projet->titre_projet ;
        }

      
        $participations = DB::select('select * from participations where id_projet = ? and id_membre = ?', [$id_projet,$id_membre]);

        foreach($participations as $part){

            $id_part = $part->id ;

        }


         $count1=  DB::delete('delete from participations where id = ?', [$id_part]);
    
        if($count1 > 0 ){

        $nombre_participant = $nombre_participant - 1 ;
     
        DB::update('update projets set nombre_participant = ? where id = ?', [$nombre_participant,$id_projet]);   
       
         DB::insert('insert into historique (id_membre, evenement ,nom_projet) values (?, ? , ?)', [$id_membre, 'licencié',$nom_projet]);

        return redirect('Chef_Projet/ModifierListParticipantProjet')->with('status','participant supprimé');

         }else{

        return redirect('Chef_Projet/ModifierListParticipantProjet')->with('status','suppression echoué');

        }

    }

    
    public function RemplacerParticipantProjet($id_membre,$id_projet,Request $request){

            $request->session()->put('id_membre_a_remplacer', $id_membre);
            $request->session()->put('id_projet_concerner', $id_projet);

            return redirect('Chef_Projet/ListParticipantRemplacant') ;

    }


    public function modifierParticipant($id_ancien_membre,$id_projet,$id_nouveau_membre,Request $request){

     
        $projets =  DB::select('select * from projets where id = ?', [$id_projet]);


       foreach($projets as $projet){

        $nombre_participant = $projet->nombre_participant ;
        $nom = $projet->titre_projet ;
      
        }


        $count1 = DB::update('update participations set id_membre = ? where id_membre = ? and id_projet = ?', [$id_nouveau_membre,$id_ancien_membre,$id_projet]);

        if($count1 > 0){

            DB::insert('insert into historique (id_membre,evenement,nom_projet) values (?, ? ,?)', [$id_nouveau_membre,'designer',$nom]);
         
         /*   $nombre_participant = $nombre_partipant +1 ;
           
            DB::update('update projets set nombre_participant = ? where id = ?', [$nombre_participant,$id_projet]);
       */
            return redirect('Chef_Projet/ListParticipantRemplacant')->with('status','membre bien designé');

        }

        


    }

    /*Consulter participant */    
   public function ConsulterListParticipantProjet($id,Request $request){


    $request->session()->put('id_projet_a_consulter', $id);


    return redirect('Chef_Projet/ConsulterListParticipantProjet');


   }

    
   public function ConsulterProfilParticipantProjet($id,Request $request){

    $request->session()->put('id_participant_a_consulter', $id);

    return redirect('Chef_Projet/ConsulterProfilParticipantProjet');
   }

   public function consulterParticipant(){

}


/*Profile */

public function Chef_projetProfil(Request $request){


    $hidden = $request->hidden ;


    if($hidden == 'info' ){


        $nom = $request->nom ;
        $prenom = $request->prenom ;
        $password = $request->password ;
        
        $etat = $request->etat ;
        $numero = $request->numero ;
        $address = $request->address ;
        $date_naissance = $request->date_naissance ;
        
        if($nom !== null){

            DB::update('update membres set nom = ? where id = ?', [$nom,$request->session()->get('id_CP')]);  
        
        }
        
        
        if($prenom !== null){
        
            DB::update('update membres set prenom = ? where id = ?', [$prenom,$request->session()->get('id_CP')]);
        
        }
        
        if($password !== null){
        
            $hashed_pass = Hash::make($password) ; 

            DB::update('update users set password = ? where id = ?', [$hashed_pass,$request->session()->get('id_CP_user')]);
        
        }
        
        
        if($etat !== null){
        
            DB::update('update membres set etat_civil = ? where id = ?', [$etat, $request->session()->get('id_CP')]);
        
        }
        
        
        if( $numero !== null){
        
            DB::update('update membres set num_telephone = ? where id = ?', [$numero,$request->session()->get('id_CP')]);
        
        }
        
        
        if( $address !== null){
        
            DB::update('update membres set address = ? where id = ?', [$address,$request->session()->get('id_CP')]);
        
        }
        
        
        if($date_naissance !== null){
        
            DB::update('update membres set date_naissance = ? where id = ?', [$date_naissance,$request->session()->get('id_CP')]);
        
        }


            return 'mis a jour profile effectué ' ; 



         }elseif($hidden == 'upload'){

        $id= 0 ;

        $intitule = $request->intitule ;
        
        $type = $request->type ;

        $lieu = $request->lieu ;

        $date = $request->date ;
        
        $id_membre = $request->session()->get('id_CP') ;
        
            /* getting pdf */
      
        $file = $request->file('justificatif') ;

        $name = $file->getClientOriginalName();
       
        $path = $file->getPathName() ;
        
        $extension = $file->getClientOriginalExtension();
      
        $allowed = array('pdf');

            /************/
    
         $prods =  DB::select('select * from production_scientifiques where intitule = ? and type = ? and date = ? and lieu = ?', [$intitule,$type,$date,$lieu]);

        foreach($prods as $prod){

            $id = $prod->id ;

        }

    
         if($id == 0){

         /*****if the production doesn't exist*****/
      
              if(in_array($extension ,$allowed)){


             $filenameNew = uniqid('',true).".". $extension;   


               $success  =   $file->move('justificatif',$filenameNew );

              if($success){
         
                $success = '\\'.$success ;
                
                 $count1 = DB::insert('insert into production_scientifiques (intitule, type, justificatif , lieu , date) values (?, ? , ? , ? , ?)', [$intitule,$type,$success,$lieu,$date]);

             if($count1>0){

                 $productions = DB::select('select * from production_scientifiques where intitule = ? and type = ? and justificatif = ? and lieu = ?  and date = ? ', [$intitule,$type,$success,$lieu,$date]);


            foreach($productions as $production){

                $id_production = $production->id ;

            }
                /*inserting in auteur table */
             $count2 = DB::insert('insert into auteurs (id_membre,id_production,rang_auteur) values (?, ? ,? )', [ $id_membre, $id_production ,1]);

              if($count2 > 0){
             
                return 'Production scientifique bien ajouté' ; 
           
               }


          }else{

             return "Erreur d'ajout , Vueillez réessayer" ;
         
            }   


             }else{

            return  'Echoué , Vueillez réessayer';

        }

        }else{

            return "format du justificatif non conforme , Vueillez uploader un PDF" ;

        }


         }else{

             return "La production scentifique est deja existant , Si vous etes un co-auteur veulliez visité l'espace Production Scientifique" ;

}

      }elseif($hidden == 'description'){


       $ch = DB::update('update membres set description = ? where id = ?', [$request->descmembre,$request->session()->get('id_CP')]);


       if($ch > 0){

        return 'description mis a jour ';


       }else{

        return 'mis a jour echoué ';

       }



      }





}

/* Production scientifique */


public function ChefProjetMesProduction($rang,$id_coauteur,$id_prod,$action,Request $request){

     /*Avoir le rang  */

     $ranggs = DB::select('select * from auteurs where id_production = ?', [$id_prod]);
        
     foreach($ranggs as $rings){

         $ring = $rings->rang_auteur ;

     }

     $ring  = $ring + 1 ;

         if($action == 'accepter'){

             
             $productions = DB::select('select * from production_scientifiques where id = ?', [$id_prod]);


             foreach($productions as $prod) {

                $demande = $prod->demande ;

             }


             $id_coauters = explode(",",$demande);

             $new_demande = array();
            
             $j = 0 ;
       
                for($i = 0 ; $i < count($id_coauters) ; $i++){


                    if($id_coauters[$i] == $id_coauteur ){


                     $count = DB::insert('insert into auteurs (id_membre , id_production , rang_auteur) values (?, ? , ?)', [$id_coauteur,$id_prod,$ring/*$rang*/]);


                    }else{
                    
                     $new_demande[$j] = $id_coauters[$i] ;
                    
                    
                    $j = $j + 1 ;
                     
                       
                    }


                }



            $new_dem = implode(',',$new_demande);

     
                if($count > 0){

                     $cc =   DB::update('update production_scientifiques set demande = ? where id = ?', [$new_dem,$id_prod]);

                     if($cc > 0 ){
                        return redirect('Chef_Projet/MesProduction')->with('success','co-auteur designé');
                        // return 'co-auteur designé' ;
                     }     
                     
                 }else{

                    return redirect('Chef_Projet/MesProduction')->with('failed','echoué');
                    // return 'echoué' ;
                    
                 }
             

         }else if($action == 'refuser'){


             $productions1 = DB::select('select * from production_scientifiques where id = ?', [$id_prod]);


             foreach($productions1 as $prod1) {

                $demande1 = $prod1->demande ;

             }


             $id_coauters1 = explode(",",$demande1);

             $new_demande1 = array();
            
              $j1 = 0 ;
       
                for($i = 0 ; $i < count($id_coauters1) ; $i++){


                    if($id_coauters1[$i] == $id_coauteur ){


                    }else{
                    
                     $new_demande1[$j1] = $id_coauters1[$i] ;
                    
                    
                    $j1 = $j1 + 1 ;
                     
                       
                    }


                }

                $new_dem1 = implode(',',$new_demande1);


                $c =   DB::update('update production_scientifiques set demande = ? where id = ?', [$new_dem1,$id_prod]);

                if($c > 0){

                    return redirect('Chef_Projet/MesProduction')->with('success','demande bien refusé');
               //  return  ' demande refusé';//redirect('Membre/MesProduction');


                }



        }

}

public function  demanderCoAuteur($id_membre_demandeur , $id_1_auteur , $id_prod,Request $request){


    $id_coauteur = $id_membre_demandeur ;

    $id_auteur  =  $id_1_auteur   ;         

    $prods =   DB::select('select * from production_scientifiques where id = ?', [$id_prod]);


  foreach($prods as $prod){

        $demande = $prod->demande ; 

  }
      
      if($demande == ''){

          $demande =  '0,'.$id_coauteur ;

      }else{

          $demande = $demande . "," .$id_coauteur ;
      }
      



     $count1 = DB::update('update production_scientifiques set demande = ? where id = ?', [$demande, $id_prod]);

     if($count1 > 0){

        return redirect('Chef_Projet/ConsulterProduction') ;
   
      }

}


public function AjouterCoauteurExterne($id, Request $request){
 
    $request->session()->put('id_prod',$id);

    return redirect('Chef_Projet/Designer_Coauteur_externe') ;
    
 }



 public function AjoutéCoauteurExt(Request $request){

    $nom = $request->nom ;
    $prenom = $request->prenom ;
    $etablissement  = $request->etablissement ;
    $rang = $request->rang ;
    $prod = $request->prod ;
    $grade = $request->grade ;

    $count1 = DB::insert('insert into coauteurs (nom , prenom , grade , rattachement) values ( ? , ? , ? , ?)', [$nom, $prenom ,$grade ,$etablissement]);

    if($count1 > 0 ){

       $results =  DB::select('select * from coauteurs where nom = ? and prenom = ? and grade = ? and rattachement = ?', [$nom,$prenom,$grade,$etablissement]);

       foreach($results as $result){

        $id = $result->id ;
        
       }


      $count2 =  DB::insert('insert into auteur_externes (id_coauteur , id_production , rang_auteur) values (?, ? , ?)', [$id,$prod,$rang]);
    
      if($count2 > 0 ){

        return redirect('Chef_Projet/Designer_Coauteur_externe')->with('success','co auteur bien ajouté');

      }else{

        return redirect('Chef_Projet/Designer_Coauteur_externe')->with('failed','co auteurs non designé');


      }

    }else{

        return redirect('Chef_Projet/Designer_Coauteur_externe')->with('failed','co auteurs non designé');


    }

   

}


}