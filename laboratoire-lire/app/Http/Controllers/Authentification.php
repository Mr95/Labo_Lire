<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash ;
use App\User ;
use Illuminate\Http\Response ;

class Authentification extends Controller
{
    

    public function login(Request $request){
        
        $id = 0 ;
              
         $results =   DB::select('select * from users where email = ?  ', [$request->email] ) ;
      
         foreach($results as $result){

            $pass = $result->password ;
            $id = $result->id ;

         }
   
    if( $id != 0 ) {    

       if( Hash::check($request->password , $pass) ){

            $grade = '' ;

             $membres =    DB::select('select * from membres where users_id = ?', [$id]) ;
        
             foreach($membres as $membre){

                $grade = $membre->grade ;
                $id_membre = $membre->id ;
                $nom_membre = $membre->nom ;
                $prenom_membre = $membre->prenom ;

             }

             //i'm working on

             if($grade == 'DL'){
              
            $request->session()->put('id_DL', $id_membre);
            $request->session()->put('id_DL_user', $id); 
            $request->session()->put('grade', $grade);
                return redirect('/Directeur');

             }else if($grade == 'CE'){

            $request->session()->put('id_CE', $id_membre);
            $request->session()->put('id_CE_user', $id); 
            $request->session()->put('grade', $grade);
               // return redirect('/Chef_Equipe');

                if( $nom_membre == '' || $prenom_membre == ''){
                
                    return redirect('Chef_Equipe/Nouveau') ;
                
                }else{

                     return redirect('/Chef_Equipe');

                 }



             }elseif($grade == 'CP'){

            $request->session()->put('id_CP', $id_membre);
            $request->session()->put('id_CP_user', $id); 
            $request->session()->put('grade', $grade);
                return redirect('/Chef_Projet');

             }elseif($grade == 'MEM'){

            $request->session()->put('id_MEM', $id_membre);
            $request->session()->put('id_MEM_user', $id);   
            $request->session()->put('grade', $grade);
            
            if( $nom_membre == '' || $prenom_membre == ''){
                
                    return redirect('Membre/Nouveau') ;
                
                }else{

                   //  return redirect('/Membre');
                   return redirect('Membre/Profile');

                 }

             }else{

                return 'Pas de grade' ;
             }

     
    
        }else{
            
            return redirect('/login');
    
        }

    }else{

        return redirect('/login');
    
    }


    }    
    



    public function logout(Request $request){


        if($request->session()->has('id_DL')){

            $request->session()->forget('id_DL');
            $request->session()->forget('id_DL_user');
            $request->session()->forget('grade');

                 return redirect('/') ;

        }elseif( $request->session()->has('id_CE') ){

            $request->session()->forget('id_CE');
            $request->session()->forget('id_CE_user');
            $request->session()->forget('grade');

                 return redirect('/') ;

        }elseif($request->session()->has('id_CP')){
            
            $request->session()->forget('id_CP');
            $request->session()->forget('id_CP_user');
            $request->session()->forget('grade');

                 return redirect('/') ;

        }elseif($request->session()->has('id_MEM')){
            
            $request->session()->forget('id_MEM');
            $request->session()->forget('id_MEM_user');
            $request->session()->forget('grade');

                 return redirect('/') ;

        }
    

    }


    public function downloadProduction($id,Request $request,Response $res){


      $productions =  DB::select('select * from production_scientifiques where id = ?', [$id]) ;

      foreach($productions as $prod ){

        $URL = $prod->justificatif ;

        $name= $prod->intitule ;

      }
     
      $file= public_path()."" . $URL;


      $headers = array(
  
                'Content-Type: application/pdf',
   );
  
   return response()->download($file, $name.'.pdf', $headers);
   
}


    public function bilan($id,Request $request){

        $request->session()->put('Bilan',$id);
       
        return redirect('/DetailBilan');

    }


    

/*   public function createUser(Request $request){

        $password = Hash::make($request->password);

        //DB::insert('insert into users (name ,email,password) values (?, ? , ?)', ['sami',$request->email ,$password]);
        //DB::update("update users set name = 'zair' where id = ?", [1]);
       
        if(Hash::check($request->password,'$2y$10$NNblkRMiZniQXR92ENbiLOffftKsgoWFsuUcYsLq5aEs5XAuJJ5yC' )){
            return "=" ;
        }else{
            return "!=";
        }
        
    }
*/


    
}