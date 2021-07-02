<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compraVeiculo extends Model
{
    protected $primaryKey='id';
    protected $table="compraveiculo";
    protected $fillable=['valor','datacompra'];
    public $incrementing=true;
    public $timestamps=false;

    public function veiculos()
    {
        return $this->belongsTo(Veiculos::class);
    }
    use HasFactory;
}

