<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partido;
use App\Models\Gol;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];
    public function partido(){
        return $this->hasMany(Partido::class);
    }
    public function gol(){
        return $this->hasMany(Gol::class);
    }
}
