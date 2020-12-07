<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direcciones';
    protected $fillable = ['calle_numero','colonia','ciudad','referencias'];
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }

    //Relacion con pedidos
    public function pedidos() {
        return $this->hasMany(Pedido::class);
    }
}
