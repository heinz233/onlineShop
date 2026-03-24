<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Orders::all();
       return response()->json($orders);
    }

    //get order per user
    public function ordersPerUser($id){
        $orders= Orders::where('user_id', $id)->get();

        foreach ($orders as $order) {
            $order->product = Product::where('id', $order->product_id)->first();
        }
        return response()->json($orders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'user_id'=>'required|integer',
            'product_id'=>'required|integer',
            'quantity'=>'required|integer',
            
        ]);

        $orders = new Orders();
        $orders->name = $validated['name'];


        $orders->save();

        return response()->json(['message'=>'Order created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $orders)
    {
         $validated = $request->validate([
            'name'=>'required|string',
            'price'=>'required|string',
            'description'=>'required|string',
            'category'=>'required|string',
            'image'=>'required|string',
        ]);

        $orders = Orders::find($orders);
        $orders->name = $validated['name'];
        $orders->price = $validated['price'];
        $orders->description = $validated['description'];
        $orders->category = $validated['category'];
        $orders->image = $validated['image'];

        $orders->save();

        return response()->json(['message'=>'Order updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
