<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class WelcomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function traitement()
    {

        request()->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);

         $result=   auth()->attempt([
                'login' => request('login'),
                'password' => request('password'),
            ]);



        //var_dump($result);
        if($result=='true'){
            switch(Auth::user()->profil)
            {
                case('entreprise'): return view('entreprise.acceuilEntreprise'); break;
                case('Consultant'): return view('index.index'); break;
                case('Project_Manager'): return view('index.administrateur'); break;
                case('Partenaire'): return view('index.partenaire'); break;
                case('default'): break;

            }

        }else{

            return view('welcome');
        }
    }


}