<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Food;
use App\Models\Order;
use App\Models\reservation;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ...

    public function toggleFeature(Request $request, $productId)
    {
        $product = Food::findOrFail($productId);
        $product->feature_product = $request->input('feature_product');
        $product->save();

        // Return a response indicating success or any other relevant information
        return response()->json(['message' => 'Feature product status updated successfully']);
    }
    
    public function toggleOrderStatus(Request $request, $id)
    {
        $product = Order::findOrFail($id);
        $product->order_status = $request->input('order_status');
        $product->save();
        return response()->json(['message' => 'Order status updated successfully']);
        // Return a response if needed
    }

    public function toggleDeliveryStatus(Request $request, $id)
    {
        $product = Order::findOrFail($id);
        $product->delivery_status = $request->input('delivery_statusToggle');
        $product->save();
        return response()->json(['message' => 'Delivery status updated successfully']);
        // Return a response if needed
    }
    public function toggleCancelStatus(Request $request, $id)
    {
        $product = Order::findOrFail($id);
        $product->cancel_status = $request->input('cancel_status');
        $product->save();
        return response()->json(['message' => 'Cancel Product successfully']);
        // Return a response if needed
    }

    // public function toggleStatus(Request $request, $id)
    // {
    //     $product = reservation::findOrFail($id);
    //     $product->status = $request->input('statusToggle');
    //     $product->save();
    //     return response()->json(['message' => 'Reservation successfully']);
    //     // Return a response if needed
    // }

    // ...
}