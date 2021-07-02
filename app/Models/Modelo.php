<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $primaryKey='id';
    protected $table="modeloveiculo";
    protected $fillable=['modelo'];
    public $incrementing=true;
    public $timestamps=false;

    public function veiculos()
    {
        return $this->hasMany(Veiculos::class);
    }

    use HasFactory;
}
