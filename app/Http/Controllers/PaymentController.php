<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'order_id'=>'required|integer',       
            'amount'=>'required|integer',
            'payment_status'=>'required|string',

            
        ]);

        $payment =new Payment();
        $payment->name = $validated['name'];
     
        $payment->save();

        return response()->json(['message' => 'Payment updated Successfully.'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        $validated = $request->validate([   
            'order_id'=>'required|integer',       
            'amount'=>'required|integer',
            'payment_status'=>'required|string',

            
        ]);

        $payment =Payment::find($payment);
        $payment->name = $validated['name'];
     
        $payment->save();

        return response()->json(['message' => 'Payment updated Successfully.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
