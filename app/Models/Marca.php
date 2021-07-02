<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $primaryKey='id';
    protected $table="marcaveiculo";
    protected $fillable=['marca'];
    public $incrementing=true;
    public $timestamps=false;


    public function veiculos()
    {
        return $this->hasMany(Veiculos::class);
    }
    use HasFactory;
}
