<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    // Asignación masiva habilitada
    protected $fillable = ['name', 'address_id'];

    // Relación uno a muchos con Student
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    // Relación uno a muchos con Teacher
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    // Relación inversa con Address
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
