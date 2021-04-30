<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partido;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable=['nom','escut','camp'];
    public function partido(){
        return $this->belongsToMany(Partido::class)->withPivot('id');
    }
}
