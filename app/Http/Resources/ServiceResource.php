<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            "service" =>  $this->service() ,
            "ip" =>  $this->requester_ip ,
            "url" =>  $this->url ,
            "result" =>  $this->result ,
            "time" =>  $this->created_at 
        ];
    }
}
