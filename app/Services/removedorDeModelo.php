<?php


namespace App\Services;


use App\Models\Modelo;
use Illuminate\Support\Facades\DB;

class removedorDeModelo
{
    public function removerModelo(int $id){
        DB::transaction(function ()use($id){
            Modelo::destroy($id);
        });
    }
}
