<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MartianResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'gender' => $this->gender,
            'trade' => $this->trade,
            'inventories' => InventoryResource::collection($this->whenLoaded('inventories'))
        ];
    }
}
