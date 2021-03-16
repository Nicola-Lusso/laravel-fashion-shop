<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Dress;

class HomeController extends Controller
  {
    public function home(){
      $data =
        [
         'saluto' => 'Benvenuto nel mio Shop'
        ];
    return view('home', $data);
    }

  
    public function articols(){

      $dati_articols = articols::all();
      
       $data =

          [ 'articols' => $dati_articols ];

      
      return view('articols',$data);
    }
    


    public function info(){
      $data =
        [
          'prova' => 'Questa è la pagina info del sito'
        ];
      return view('info',$data);
    }

}