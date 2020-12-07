<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['total'];
    //Relacion con direcciones
    public function direccion() {
        return $this->belongsTo(Direccion::class);
    }

    //Relacion con usuarios
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function productos() {
        return $this->belongsToMany(Producto::class)->withPivot('cantidad');
    }
}
