<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) : array
    {   
        //Si utilizo $this-> devuelve null todas las propiedades
        //Si utilizo $request-> devuelve null solamente img_path, name, description
        return [
            'barcode'     => $this->barcode,
            'img_path'    => $this->img_path,
            'name'        => $this->name,
            'description' => $this->description
        ];
    }
}
