<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

       // Asignación masiva habilitada
       protected $fillable = ['name'];

       // Relación uno a muchos con Commune
       public function communes()
       {
           return $this->hasMany(Commune::class);
       }
}
