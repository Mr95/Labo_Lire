<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash ;

class Membre_Controller extends Controller
{
    //




        public function MembreProfile(Request $request){


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

                        DB::update('update membres set nom = ? where id = ?', [$nom,$request->session()->get('id_MEM')]);  
                    
                    }
                    
                    
                    if($prenom !== null){
                    
                        DB::update('update membres set prenom = ? where id = ?', [$prenom,$request->session()->get('id_MEM')]);
                    
                    }
                    
                    if($password !== null){
                    
                        $hashed_pass = Hash::make($password) ; 

                        DB::update('update users set password = ? where id = ?', [$hashed_pass,$request->session()->get('id_MEM_user')]);
                    
                    }
                    
                    
                    if($etat !== null){
                    
                        DB::update('update membres set etat_civil = ? where id = ?', [$etat, $request->session()->get('id_MEM')]);
                    
                    }
                    
                    
                    if( $numero !== null){
                    
                        DB::update('update membres set num_telephone = ? where id = ?', [$numero,$request->session()->get('id_MEM')]);
                    
                    }
                    
                    
                    if( $address !== null){
                    
                        DB::update('update membres set address = ? where id = ?', [$address,$request->session()->get('id_MEM')]);
                    
                    }
                    
                    
                    if($date_naissance !== null){
                    
                        DB::update('update membres set date_naissance = ? where id = ?', [$date_naissance,$request->session()->get('id_MEM')]);
                    
                    }


                        return 'mis a jour profile effectué ' ; 



                }elseif($hidden == 'upload'){

                    $id= 0 ;

                    $intitule = $request->intitule ;
                    
                    $type = $request->type ;

                    $lieu = $request->lieu ;

                    $date = $request->date ;
                    
                    $id_membre = $request->session()->get('id_MEM') ;
                    
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


                   $ch = DB::update('update membres set description = ? where id = ?', [$request->descmembre,$request->session()->get('id_MEM')]);


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

                  return redirect('Membre/ConsulterProduction') ;
             
                }


       }
               


       /** pour designer les coauteurs */
       public function MembreMesProduction($rang,$id_coauteur,$id_prod,$action,Request $request){

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
                            
                               return  redirect('Membre/MesProduction')->with('success','co-auteur designé');

                               // return 'co-auteur designé' ;
                            }     
                            
                        }else{

                            return  redirect('Membre/MesProduction')->with('failed','echoué');

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

                        return  redirect('Membre/MesProduction')->with('success','demande refusé');

                       // return  ' demande refusé';//redirect('Membre/MesProduction');


                       }



                }













           



       }


       
       
       public function AjouterCoauteurExterne($id, Request $request){
 
        $request->session()->put('id_prod',$id);

        return redirect('Membre/Designer_Coauteur_externe') ;
        
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

            return redirect('Membre/Designer_Coauteur_externe')->with('success','co auteur bien ajouté');

          }else{

            return redirect('Membre/Designer_Coauteur_externe')->with('failed','co auteurs non designé');


          }

        }else{

            return redirect('Membre/Designer_Coauteur_externe')->with('failed','co auteurs non designé');


        }

       
    
    }















 }







