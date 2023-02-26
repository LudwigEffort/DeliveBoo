<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'id'            =>  $this->id,
            'f_name'        => $this->f_name,
            'l_name'        => $this->l_name,
            'phone_number'  => $this->phone_number,
            'andress'       => $this->andress,
            'amount'        => $this->amount
        ];
    }
}
