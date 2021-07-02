<?php


namespace App\Services;


use App\Models\Modelo;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Mod;

class alteradorDeModelo
{
    public function alterarModelo(int $id, string $novomodelo){
        DB::transaction(function ()use($id,$novomodelo){
            $modeloObj=Modelo::find($id);
            $modeloObj->modelo=$novomodelo;
            $modeloObj->save();
        });
    }
}
