<?php


namespace App\Services;


use App\Models\Cor;
use Illuminate\Support\Facades\DB;

class alteradorDeCor
{
    public function alterCores(int $id,string $cor){
        DB::transaction(function ()use($id,$cor){
            $corObj=Cor::find($id);
            $corObj->cor=$cor;
            $corObj->save();
        });
    }
}
