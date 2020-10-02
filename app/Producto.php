<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'foto', 'foto_url', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }    

    public function precios()
    {
        return $this->hasMany(Precio::class);
    }    
}
