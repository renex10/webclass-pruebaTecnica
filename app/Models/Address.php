<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
      // Asignación masiva habilitada
      protected $fillable = ['street', 'commune_id'];

      // Relación inversa con School
      public function schools()
      {
          return $this->hasMany(School::class);
      }
  
      // Relación inversa con Commune
      public function commune()
      {
          return $this->belongsTo(Commune::class);
      }
}
