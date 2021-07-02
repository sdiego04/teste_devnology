<?php


namespace App\Services;


use App\Models\Cor;
use Illuminate\Support\Facades\DB;

class removedorDeCor
{
    public function removeCor(int $id){
        DB::transaction(function ()use($id){
            Cor::destroy($id);
        });
    }
}
