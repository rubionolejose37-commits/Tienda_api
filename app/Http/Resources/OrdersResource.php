<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrdersResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'client' => $this->client,
            'order_date' => $this->order_date,
            'total_amount' => $this->total_amount,
            'status' => $this->status,
            'payment_method' => $this->payment_method,
            'shipping_address' => $this->shipping_address,
        ];
    }
}