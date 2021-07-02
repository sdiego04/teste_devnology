<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    protected $primaryKey='id';
    protected $table="corveiculo";
    protected $fillable=['cor'];
    public $incrementing=true;
    public $timestamps=false;

    public function veiculos()
    {
        return $this->hasMany(Veiculos::class);
    }
    use HasFactory;
}
