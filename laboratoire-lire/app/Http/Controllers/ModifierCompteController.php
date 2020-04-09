<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash ;

class ModifierCompteController extends Controller
{
    //



    public function new_password(Request $request){

        $hashad_password = Hash::make($request->password) ;

        $id_membre =   $request->session()->get('id_MEM');

        $id_user = $request->session()->get('id_MEM_user');

        $nom = $request->nom ; 

        $prenom = $request->prenom ;


        $count1 = DB::update('update users set password = ? where id = ?', [$hashad_password ,$id_user]);

        $count2 = DB::update('update membres set nom = ? , prenom = ? where id = ?', [$nom , $prenom , $id_membre]);
           
        
        if($count1 > 0 && $count2 > 0 ){


            return redirect('/Membre/Profile');

        }else{

            //pas encore

        }
           

    }


    public function NouveauPasswordChefEquipe(Request $request){

        $hashad_password = Hash::make($request->password) ;

        $id_membre =   $request->session()->get('id_CE');

        $id_user = $request->session()->get('id_CE_user');

        $nom = $request->nom ; 

        $prenom = $request->prenom ;


        $count1 = DB::update('update users set password = ? where id = ?', [$hashad_password ,$id_user]);

        $count2 = DB::update('update membres set nom = ? , prenom = ? where id = ?', [$nom , $prenom , $id_membre]);
           
        
        if($count1 > 0 && $count2 > 0 ){


            return redirect('/Chef_Equipe');

        }else{

            //normalement nkhalih f la page be3d

        }

    }





}
