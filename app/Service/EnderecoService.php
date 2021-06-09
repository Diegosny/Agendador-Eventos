<?php 

namespace App\Service;

use App\Models\Endereco;
use Illuminate\Support\Facades\DB;

class EnderecoService 
{

    public function storage ($data) 
    {
        try {

            DB::beginTransaction();

             $endereco = new Endereco();
             $endereco->fill($data);
             $endereco->save();

            DB::commit();

            return array('title' => 'Sucesso Ao Cadastrar', 'text' => 'Cadastro Realizado Com Sucesso', 'type' => 'success');
        } catch(\Exception $e) {
            return array('title' => 'Error Ao Cadastrar', 'text' => 'Não Foi Possivel Cadastrar Um Endereço', 'type' => 'error');
        }
    }
}