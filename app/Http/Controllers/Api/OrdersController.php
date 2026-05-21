<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Http\Resources\OrdersResource; // Importado originalmente con "s"
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::with('clients')->get();
        // Cambiado a OrdersResource (con s)
        return OrdersResource::collection($orders);
    }

    public function store(StoreOrdersRequest $request)
    {
        $order = Order::create($request->validated());
        // Cambiado a OrdersResource (con s)
        return new OrdersResource($order);
    }

    public function show(string $id)
    {
        $order = Order::with('clients')->findOrFail($id);
        // Cambiado a OrdersResource (con s)
        return new OrdersResource($order);
    }

    public function update(UpdateOrderRequest $request, string $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->validated());

        // Cambiado a OrdersResource (con s)
        return new OrdersResource($order);
    }

    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(null, 204);
    }
}