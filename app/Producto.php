<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'costo1', 'costo2', 'costo3', 'costo4', 'foto', 'foto_url', 'categoria_id'];

    public function categoria()
    {
        return $this->hasMany(Producto::class);
    }    
}
