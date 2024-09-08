<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;
     // Asignación masiva habilitada
     protected $fillable = ['name', 'region_id'];

     // Relación uno a muchos con Address
     public function addresses()
     {
         return $this->hasMany(Address::class);
     }
 
     // Relación inversa con Region
     public function region()
     {
         return $this->belongsTo(Region::class);
     }
}
