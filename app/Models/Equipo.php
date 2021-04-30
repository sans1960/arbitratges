<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partido;
use App\Models\Gol;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable=['nom','escut','camp'];
    public function partido(){
        return $this->belongsToMany(Partido::class)->withPivot('id');
    }
    public function gol(){
        return $this->hasMany(Gol::class);
    }
}
