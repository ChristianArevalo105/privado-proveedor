<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    protected $fillable = ['descripcion', 'costo', 'producto_id'];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }    
}
