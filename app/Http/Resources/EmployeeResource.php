<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "compagny_info" => ["name" => $this->compagny->name, "email"=>$this->compagny->email, "website" => $this->compagny->website],
            "email" => $this->email,
            "phone" => $this->phone
        ];
    }
}
