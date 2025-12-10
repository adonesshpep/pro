<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $lan=$request->get('lan','en');
        if($lan=='sw'){
            return [
                'name' => $this->s_name,
                'description' => $this->s_description,
                'price' => $this->price,
                'stock_quantity' => $this->stock_quantity,
                'category' => $this->category->s_name,
                'delivery_option' => $this->delivery_option,
                'price_after_discount' => $this->price_after_discount,
                'created_at' => $this->created_at
            ];
        }else{
        return [
            'name' => $this->name,
            'description' => $this->description,
                'price' => $this->price,
                'stock_quantity' => $this->stock_quantity,
                'category' => $this->category->name,
                'delivery_option' => $this->delivery_option,
                'price_after_discount' => $this->price_after_discount,
                'created_at' => $this->created_at
        ];
        }
    }
}
