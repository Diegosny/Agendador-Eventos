<?php 

namespace App\Service;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventosService 
{

    public function showForm () 
    {
      $user = Auth::user()->id;
      $endereco = DB::table('enderecos')->where('id_user', $user)->get();
       
       return [
         'enderecos' => $endereco
       ];
    }
}