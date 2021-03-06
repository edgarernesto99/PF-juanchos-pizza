<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeetes;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "productos";
    protected $fillable = ['nombre','descripcion','precio','tipo','tamanio','imagen'];


    public function SetNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucfirst(strtolower($value));
    }
    public function getDescripcionAttribute($value)
    {
        return ucfirst(strtolower($value));
    }
    public function getTipoAttribute($value)
    {
        return ucfirst(strtolower($value));
    }

    //Aqui van las relaciones con otras tablas
    public function users() {
        return $this->belongsToMany(User::class)->withPivot('cantidad');
    }

    public function pedidos() {
        return $this->belongsToMany(Pedido::class)->withPivot('cantidad');
    }
}
