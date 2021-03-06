<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Equipo;
use App\Models\Gol;

class Partido extends Model
{
    use HasFactory;
    protected $fillable = ['data','categoria_id','camp','resultat'];
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function equipo(){
        return $this->belongsToMany(Equipo::class)->withPivot('id');
    }
    public function gol(){
        return $this->hasMany(Gol::class);
    }
}
