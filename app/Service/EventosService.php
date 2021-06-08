<?php 

namespace App\Service;

use Illuminate\Support\Facades\DB;

class EventosService 
{

    public function showForm () 
    {
       $endereco = DB::table('enderecos')->get();
       
       return [
         'endereco' => $endereco
       ];
    }
}