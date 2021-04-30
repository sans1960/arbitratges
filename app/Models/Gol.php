<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partido;
use App\Models\Categoria;
use App\Models\Equipo;

class Gol extends Model
{
    use HasFactory;
    protected $fillable = ['partido_id','categoria_id','equipo','minuto','jugador','marcador'];
    public function partido(){
        return $this->belongsTo(Partido::class);
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function equipo(){
        return $this->belongsTo(Equipo::class);
    }
}

