<?php


namespace App\Services;


use App\Models\Marca;
use Illuminate\Support\Facades\DB;

class alteradorDeMarca
{
    public function alterarMarcas(int $id, string $novoNome){
        DB::transaction(function ()use($id,$novoNome){
            $marcaObj=Marca::find($id);
            $marcaObj->marca=$novoNome;
            $marcaObj->save();
        });

    }
}
