<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendaVeiculo extends Model
{
    protected $primaryKey='id';
    protected $table="vendaveiculo";
    protected $fillable=['datavenda','valorvenda','comissao'];
    public $incrementing=true;
    public $timestamps=false;


    use HasFactory;
    public function veiculos()
    {
        return $this->belongsTo(Veiculos::class);
    }

}
