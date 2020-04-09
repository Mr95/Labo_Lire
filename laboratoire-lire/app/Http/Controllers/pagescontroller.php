<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash ;

class pagescontroller extends Controller
{
    
/******************************************************************************************************/
/***************************************Directuer Pages************************************************/
/******************************************************************************************************/

public function Directeur(){

      if($request->session()->get('grade') == 'DL'){ //kanet has
  
          return view('members/Menu_DL');
      
     }else{
  
         return view('welcome');
  
     }
  
  
  }


  public function MotDescription(){

      if($request->session()->get('grade') == 'DL'){ //kanet has
  
        return view('members/Menu_DL_discription_mot');
      
     }else{
     
       return view('welcome');
     
    }
     
  }
  
  public function NouvelleEquipe(){

      return view('members/Menu_DL_nouvelle_Equipe');
          
  }

  public function DesignerCreerChefEquipe(){

    return view('members/Menu_DL_designer_cree');

  }


  public function DesignerListe(){

    return view('members/Menu_DL_designer_liste');

  }

  public function CreeChefEquipe(){

    return view('members/Menu_DL_nouveau_chef');

  }

  
  public function LicenciementEquipe(){

    return view('members/Menu_DL_Licenciement_equipe');

  }

  
  public function ReactivationEquipe(){

    return view('members/Menu_DL_Reactivation_equipe');

  }

  
  public function ConsulterEquipes(){

    return view('members/Menu_DL_consulter_equipes');

  }

  public function ConsulterMems(){

    return view('members/Menu_DL_consulter_mems');

  }

  public function ConsulterMemsProfil(){

    return view('members/Menu_DL_consulter_mem_profil');

  }

  public function DirecteurDetailEquipe(){

    return view('members/Menu_DL_consulter_detail_equipe');

  }


  public function Profildirecteur(){

    return view('members/Menu_DL_Profile_Perso');

  }

  public function DirecteurConsulterProduction(){

    return view('members/Menu_DL_consulter_production');

  }
  

  public function DirecteurMesProduction(){

    return view('members/Menu_DL_mes_production');

  }


  public function DirecteurManifestation(){

    return view('members/Menu_DL_manifestation');

  }

  public function AjouterCoauteurExterneDL(){

    return view('members/Menu_DL_coauteur_externe');

  }

  public function etablir_bilan(){

   return view('members/Menu_DL_etablissement_bilan');

  }


/******************************************************************************************************/
/***************************************Chef Equipe Pages**********************************************/
/******************************************************************************************************/


public function ChefEquipe(){

     if($request->session()->get('grade') == 'CE'){ //kanet has
  
          return view('members/Menu_CE');
      
     }else{
  
          return view('welcome');
  
     }
  
  
  }

  public function ChefEquipeNouveauMembre(){

      if($request->session()->get('grade') == 'CE'){ //kanet has
  
          return view('members/Menu_CE_nouveau_membre');
      
     }else{
  
           return view('welcome');
  
     }
  
  
  }

  public function ChefEquipeDesignermembre(){

      if($request->session()->get('grade') == 'CE'){ //kanet has
  
          return view('members/Menu_CE_designer_membre');
      
      }else{
  
          return view('welcome');
  
      }
  
  
  }

  public function ChefEquipeConsulterEquipe(){

     if($request->session()->get('grade') == 'CE'){ //kanet has
  
          return view('members/Menu_CE_consulter_equipe');
      
     }else{
  
           return view('welcome');
  
     }
  
  
  }

  public function  ChefEquipeConsulterMembre(){

    if($request->session()->get('grade') == 'CE'){ //kanet has
  
          return view('members/Menu_CE_consulter_mem');
      
    }else{
             return view('welcome');
  
     }

     
  }


  public function  ChefEquipeDescription(){

     if($request->session()->get('grade') == 'CE'){ //kanet has
  
          return view('members/Menu_CE_description_equipe');
      
     }else{
  
           return view('welcome');
  
     }

     
  }

  public function  ChefEquipeDesignerChefProjet(){

      if($request->session()->get('grade') == 'CE'){ //kanet has
  
          return view('members/Menu_CE_designer_chefprojet');
      
     }else{
  
          return view('welcome');
  
     }

     
  }

  
  public function  DesignerChefProjet(){

      if($request->session()->get('grade') == 'CE'){ //kanet has
  
          return view('members/Menu_CE_designer_Chef_projet');
      
     }else{
  
          return view('welcome');
  
    }

     
  }


  public function NouveauPasswordChefEquipe(){

      if($request->session()->get('grade') == 'MEM'){ //kanet has
  
          return view('members/Nouveau_password_CE');
      
      }else{
  
            return view('welcome');
  
      }
  
  }



    public function ChefEquipeConsulterProfileMembre(){


      return view('members/Menu_CE_consulter_mem_profil');

    }

    

    public function ConsulterProfilePerso(){


      return view('members/Menu_CE_profil_perso');

    }


    public function ChefEquipeConsulterProduction(){

      return view('members/Menu_CE_consulter_production');

    }

    public function ChefEquipeMesProduction(){

      return view('members/Menu_CE_mes_production');

    }


    public function AjouterCoauteurExterneCE(){

      return view('members/Menu_CE_coauteur_externe');

    }


/******************************************************************************************************/
/****************************************Chef projet Pages*******************************************/
/******************************************************************************************************/

public function  ChefProjet(){

      if($request->session()->get('grade') == 'CP'){ //kanet has
  
          return view('members/Menu_CP');
      
      }else{
  
            return view('welcome');
  
      }

     
  }


    public function CreerProjet(){

      return view('members/Menu_CP_creer_projet') ;
      
    }

    public function modifierProjet(){

      return view('members/Menu_CP_modifier_projet') ;

    }


    public function consulterProjet(){

      return view('members/Menu_CP_consulter_projet');
      
    }

    public function DesignerParticipantProjet(){

      return view('members/Menu_CP_designer_participant_projet');

    }


    public function ModifierParticipantProjet(){

      return view('members/Menu_CP_modifier_participant_projet');

    }


    public function ConsulterParticipantProjet(){

      return view('members/Menu_CP_consulter_participant_projet');

    }


    public function ConsulterDetailProjet(){

      return view('members/Menu_CP_consulter_detail_projet');

    }


    public function MettreAjourProjet(){

      return view('members/Menu_CP_mettre_a_jour_projet');


    }


    public function ListeMembreCP(){

      return view('members/Menu_CP_liste_membre');

    }


    public function ConsulterListParticipantProjet(){

      return view('members/Menu_CP_consulter_list_participant_projet');

    }


    public function ConsulterProfilParticipantProjet(){


      return view('members/Menu_CP_profile_participant');


    }

    public function ModifierListParticipantProjet(){

      return view('members/Menu_CP_modifier_participant_list_projet');
    
    }


    public function ListParticipantRemplacant(){

        return view('members/Menu_CP_modifier_participant_remplacant_projet');

    }

//profile

    public function ChefProjetProfil(){

      return view('members/Menu_CP_profile');
    
    }

//Manifestation

    public function ChefProjetConsulterProduction(){

      return view('members/Menu_CP_consulter_production');

    }

    public function ChefProjetMesProduction(){

      return view('members/Menu_CP_mes_production');

    }

    public function AjouterCoauteurExterneCP(){

      return view('members/Menu_CP_coauteur_externe');

    }

/******************************************************************************************************/
/***************************************** Memebre Pages*********************************************/
/******************************************************************************************************/

public function membre(Request $request){

    if( $request->session()->get('grade') == 'MEM'){ //kanet has

        return view('members/Menu_MEM');
    
    }else{

         //return view('welcome');

         return redirect('NotFound');

    }

}

public function NouveauPassword(){

    if($request->session()->get('grade') == 'MEM'){ //kanet has

        return view('members/Nouveau_password');
    
   }else{

        return view('welcome');

  }


}

public function MembreProfile(){


  return view('members/Menu_MEM_profile');


}


public function MembreConsulterProduction(){


  return view('members/Menu_MEM_consulter_production');



}


public function MembreMesProduction(){


  return view('members/Menu_MEM_mes_production');


}

public function AjouterCoauteurExterneMEM(){

  return view('members/Menu_MEM_coauteur_externe');

}



public function notfound(){


  return view('members/404');


}

public function bilan(){

  return view('detailBilan') ;
}

/******************************************************************************************************/
/***************************************** Memebre Pages*********************************************/
/******************************************************************************************************/

/********************************************TESTS************************************************/
/********************************************TESTS************************************************/

/**
  
 
  
  
  
  
  
 
 */

    public function new(){
      
       $name = "hello <span style='color:red;'>world</span>" ;
        return view('login')->with([
            'first' => $name ,            
            'last' => 'roslane'
        ]);    
    }


    public function user($id){

        return view('user')->with('id',$id);

    } 

    //pour uploader un fichier 
    public function uploadFile(Request $request){

                   
                 
                   $file = $request->file('file1') ;
                    $name = $file->getClientOriginalName();
                 
                 /* to get data from FORM */
                //$image = $_FILES['file'];  
                   /*** to get file information ****/
                   /*$imageName = $_FILES['file']['name'] ;
                   $imageTmp = $_FILES['file']['tmp_name'] ;
                   $imageSize = $_FILES['file']['size'] ;
                   $imageError = $_FILES['file']['error'] ;
                   $imageType = $_FILES['file']['type'] ;  */
                /* to permit only image type */
 
                  /*$FileExt = explode(".",$imageName);
                   $FileActualExt = strtolower(end($FileExt)); 
                   $allowed = array('jpg','jpeg','png','pdf');  */
                  
                   
                /*  if(in_array($FileActualExt,$allowed)){
 
                         if($imageError === 0){
 
                        if($imageSize < 10000000){

                            $filenameNew = uniqid('',true) .". ". $FileActualExt;   
                            $fileDestination = "MediaPost/".$filenameNew ;
                            
                            move_uploaded_file($imageTmp,$fileDestination); 

                            $stmt = $con->prepare("insert into post( title ,comment ,url ) values(?,?,?);");*/
                              
                            
                          //if( $stmt->execute(array($title,$comment,$fileDestination/*$filenameNew*/))){

                          /* echo "Post was Succesfuly added" ;

                            }else{

                                echo "failed" ;    
                            }  

                        }else{

                            echo " unsupported image size .. " ;
                        }   

                    }else{
                          
                        echo "there was an error while uploading a file " ;  
                  
                    }
 
                   }else{
 
                       echo "You cannot upload type of this file .." ;

                   } 
 
                  return 'upload file' ;*/
                   return 'name file is = ' . $name;

     }




/********************************************TESTS************************************************/
/********************************************TESTS************************************************/






}