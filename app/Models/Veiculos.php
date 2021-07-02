<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    protected $primaryKey='id';
    protected $table="veiculos";
    protected $fillable=['anofabricacao','placa','chassi','status'];
    public $incrementing=true;
    public $timestamps=false;



    public function marca(){

        return $this->belongsTo(Marca::class);
    }
    public function modelo(){

        return $this->belongsTo(Modelo::class);
    }
    public function cor(){

        return $this->belongsTo(Cor::class);
    }
    public function dataCompra(){

        return $this->hasMany(compraVeiculo::class);
    }
    public function vendaveiculo(){

        return $this->hasMany(vendaVeiculo::class);
    }

    use HasFactory;
}
