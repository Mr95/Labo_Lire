<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash ;
use Mail;

class Directeur_labo_Controller extends Controller
{
   
    
    public function nouvelleEquipe(Request $request){


            $Nom_equipe = $request->nom ;
           
            $acronyme = $request->abreviation ;



       $equipes  = DB::select('select * from equipes ');


        foreach($equipes as $equipe){

              //  echo  $equipe->id . '   ' . $equipe->nom . '   ' .$equipe->acronyme  ;

                if( ($equipe->nom == $Nom_equipe ) ||( $acronyme == $equipe->acronyme) ){

                    return 'Equipe deja existante' ;

                }
       
       
       
            }

          $count =  DB::insert('insert into equipes (nom , acronyme , etat , description , id_labo) values (?,?,?,?, ?)', [ $Nom_equipe,$acronyme,'actif','inserer votre description',1 ]);


          if($count > 0){
  
           $newteams = DB::select('select * from equipes where acronyme = ?', [ $acronyme]) ;

           foreach($newteams as $newteam){

                $request->session()->put('teamid', $newteam->id);

           }

            return redirect('Directeur/DesignerCreerChefEquipe') ;

          }

          
    }



    public function CreeChefEquipe(Request $request){

       $id = 0 ;

       $id_equipe =  $request->session()->get('teamid');
        
       $email = $request->email ;
   
       $results =   DB::select('select * from users where email = ?', [$email]) ;

       foreach($results as $result){

           $id = $result->id ;

       }
       
       if($id !== 0 ){

           $message = 'e-mail deja existant' ; 
           return $message ;
      
       }else{
       //https://stackoverflow.com/questions/19412055/sending-email-with-laravel-but-doesnt-recognize-variable

           

           $generated_password  = '123456'/*uniqid(mt_rand(6,7)) */;

           $hashed_password  = Hash::make($generated_password) ;
          
           //inserting user 
          $count1 =  DB::insert('insert into users(email , password)  values (?,?)', [ $email , $hashed_password ]) ;
         
          if($count1 > 0){

             //retriev user id
             $getUsetids  = DB::select('select id from users where email = ? and password = ?', [$email ,$hashed_password]) ;   


             foreach($getUsetids as $usids){

                   $usid = $usids->id ;


             }

            
             //inserting membre

           DB::insert('insert into membres (grade , users_id , etat) values (?, ? , ?)', ['CE',$usid,'actif']);
           
           
           
         


         // retrieve id membre
         
         $getmembreids = DB::select('select id from membres where users_id = ?', [$usid]);

         foreach($getmembreids as $memids){

             $memid  =  $memids->id ;

         }


          $count2 = DB::insert('insert into appartenances (id_membre,id_equipe) values (?, ?)', [$memid,$id_equipe]) ;


           if($count2 > 0 ){


               $data = array('name'=>"User",  'email'=>$email , "body" => "" , 'password'=> $generated_password );

               Mail::send('emails.mail', $data, function($message) use ($email){
                   
                       $message->to( $email  , 'Laboratoire Lire')->subject('Information du compte');
                   
                       $message->from('Lire.constantine2@gmail.com','laboratoire');
                   
                   });
                   

                   return "Chef d'equipe bien creé" ;

           }

           

          }


          
          
          
          // return $email . ' ' .$count . " <br>  generated password ". $generated_password . "<br> hashed password  ". $hashed_password;
   
   
  
       }

        


    }


    public function DesignerChef($idmembre){

    }

/* AJAX*/
   public function CreeChefEquipefromId($id ,Request $request){


      $id_equipe = $request->session()->get('teamid');

      $id_membre = $id ;  


        $count1 =  DB::update('update membres set grade = ? where id = ?', ['CE',$id_membre]);

        if($count1 > 0){


          $count2 =   DB::update('update appartenances set id_equipe = ? where id_membre = ?', [$id_equipe,$id_membre]);

          

          if($count2 > 0 ){

            return 'equipe bien creé ' ;

          }



        }else{

            return 'membre non designé ' ;

        }


   }


   public function MotDescription(Request $request){

        $option =  $request->optionsRadios  ;

        $text = $request->motdesc ;

                if($option == 'description'){


                   $count1 =   DB::update('update laboratoires set description = ? where id = ?', [$text,1]);

                   if($count1 > 0){

                        return 'La description du laboratoire est mise a jour' ;

                   }else{

                    return ' mise a jour echoué' ;

                   }

                }else if($option  ==  'mot'){

                    $count2 =   DB::update('update laboratoires set  mot_directeur = ? where id = ?', [$text,1]);

                   if($count2 > 0){

                        return 'Le mot du directeur est mise a jour' ;

                   }else{

                    return ' mise a jour echoué' ;

                   }

                }

   }


   public function LicenciementEquipe($id , Request $request){

            $id_equipe = $id ;

               $count1 =  DB::update('update equipes set etat = ? where id = ?', ['inactif',$id_equipe]);

                if($count1 > 0){

                    return  redirect('Directeur/LicenciementEquipe') ;

                }  

   }


    public function ReactivationEquipe($id,Request $request){

                $id_equipe = $id ;

                $count1 =  DB::update('update equipes set etat = ? where id = ?', ['actif',$id_equipe]);
 
                 if($count1 > 0){
 
                     return  redirect('Directeur/ReactivationEquipe') ;
 
                 }  

    }


    public function consulterProfileMEM($id,Request $request){

                $request->session()->put('id_profil',$id);
                
                return redirect('Directeur/ConsulterMemsProfil');
        
    }


    public function DirecteurDetailEquipe($id , Request $request){

                
                $request->session()->put('id_equipe_detail',$id);

                return redirect('Directeur/DetailEquipe'); 
                
            
                
                
    }


    public function Profildirecteur(Request $request){

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

                DB::update('update membres set nom = ? where id = ?', [$nom,$request->session()->get('id_DL')]);  
            
            }
            
            
            if($prenom !== null){
            
                DB::update('update membres set prenom = ? where id = ?', [$prenom,$request->session()->get('id_DL')]);
            
            }
            
            if($password !== null){
            
                $hashed_pass = Hash::make($password) ; 

                DB::update('update users set password = ? where id = ?', [$hashed_pass,$request->session()->get('id_DL_user')]);
            
            }
            
            
            if($etat !== null){
            
                DB::update('update membres set etat_civil = ? where id = ?', [$etat, $request->session()->get('id_DL')]);
            
            }
            
            
            if( $numero !== null){
            
                DB::update('update membres set num_telephone = ? where id = ?', [$numero,$request->session()->get('id_DL')]);
            
            }
            
            
            if( $address !== null){
            
                DB::update('update membres set address = ? where id = ?', [$address,$request->session()->get('id_DL')]);
            
            }
            
            
            if($date_naissance !== null){
            
                DB::update('update membres set date_naissance = ? where id = ?', [$date_naissance,$request->session()->get('id_DL')]);
            
            }

                return 'mis a jour profile effectué ' ; 

        }elseif($hidden == 'upload'){

            $id= 0 ;

            $intitule = $request->intitule ;
            
            $type = $request->type ;

            $lieu = $request->lieu ;

            $date = $request->date ;
            
            $id_membre = $request->session()->get('id_DL') ;
            
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


           $ch = DB::update('update membres set description = ? where id = ?', [$request->descmembre,$request->session()->get('id_DL')]);


           if($ch > 0){

            return 'description mis a jour ';


           }else{

            return 'mis a jour echoué ';

           }



          }

    }


          /* pour qu'un membre demande de devenir un coauteur */
    public function demanderCoAuteur($id_membre_demandeur , $id_1_auteur , $id_prod,Request $request){

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

                return redirect('Directeur/ConsulterProduction') ;
           
              }


    }
             

     /** pour designer les coauteurs */
   public function DirecteurMesProduction($rang,$id_coauteur,$id_prod,$action,Request $request){

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
                          
                              return redirect('Directeur/MesProduction')->with('success','co-auteur designé');

                             // return 'co-auteur designé' ;
                          }     
                          
                      }else{

                        return redirect('Directeur/MesProduction')->with('failed','echoué');

                        //  return 'echoué' ;

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

                        return redirect('Directeur/MesProduction')->with('success','demande refusé');

                    //  return  ' demande refusé';//redirect('Membre/MesProduction');


                     }



            }


}



    public function DirecteurManifestation(Request $request){

        
       $titre = $request->intitule ; 
       $type = $request->type ; 
       $domaine = $request->domaine ;
       $lieu = $request->lieu ;
       $date = $request->date ;
       $date_fin = $request->date_fin ;
       $description = $request->description ;

       $count1 = DB::insert('insert into manifestations (titre,type,domaine,description,date,date_fin,lieu,id_labo) values (?,?,?,?,?,?,?,?)', [$titre,$type,$domaine,$description,$date,$date_fin, $lieu,1]);

      if($count1 > 0){

        return 'manifestation inseré' ;


      }else{

        return "echec d'ajout" ;

      }
      
      
    }



     public function AjouterCoauteurExterne($id, Request $request){
 
        $request->session()->put('id_prod',$id);

        return redirect('Directeur/Designer_Coauteur_externe') ;
        
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

            return redirect('Directeur/Designer_Coauteur_externe')->with('success','co auteurs bien inseré');

          }else{

            return redirect('Directeur/Designer_Coauteur_externe')->with('failed','co auteurs non designé');


          }

        }else{

            return redirect('Directeur/Designer_Coauteur_externe')->with('failed','co auteurs non designé');


        }

       
    
    }


     public function Bilan(Request $request){


       $bilan = $request->bilan ;


      $lab =  DB::select('select * from laboratoires where id = ?', [1]);

      foreach($lab as $la){

        $bil = $la->bilan ;

      }

      if($bilan == $bil ){

        return redirect('Directeur/Etablissement_Bilan')->with('fait' ,'operation deja effectué'); 

      }else{


        $count =  DB::update('update laboratoires set bilan = ? where id = ?', [$bilan,1]);

        if($count > 0 && $bilan =='oui'){
 
             return redirect('Directeur/Etablissement_Bilan')->with('success' ,'bilan etabli'); 
 
        }else if($count > 0 && $bilan == 'non'){
 
         return redirect('Directeur/Etablissement_Bilan')->with('failed' ,'bilan non etabli'); 
 
        }
         


      }

      


     }





}