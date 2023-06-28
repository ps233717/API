<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerRecourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->gebruikernaam,
            'Geslacht' => $this->gender,
            'email' => $this->email,
            'adress' => $this->adress,
            'postcode' => $this->postcode,
            'city' => $this->City,
            
            
            
        ];
    }
}
