<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Equipo;

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
}
