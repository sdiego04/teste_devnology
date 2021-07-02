<?php


namespace App\Services;


use App\Models\Marca;
use Illuminate\Support\Facades\DB;

class removedorDeMarca
{
    public function removedorMarca(int $idMarca){

        DB::transaction(function ()use ($idMarca){
            Marca::destroy($idMarca);
        });
    }
}
