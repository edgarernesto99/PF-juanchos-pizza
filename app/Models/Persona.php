<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = "personas";
    protected $fillable = ['nombre','apellidos','telefono'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getApellidosAttribute($value)
    {
        return ucfirst(strtolower($value));
    }

    public function SetNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucfirst(strtolower($value));
    }

    
}
