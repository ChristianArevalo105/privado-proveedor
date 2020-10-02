<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Producto extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'foto'=> $this->foto,
            'foto_url'=> $this->foto_url,
            'precios' => PrecioResource::collection($this->precios),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
