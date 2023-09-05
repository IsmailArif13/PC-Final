<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\OrderProduk;
use Illuminate\Http\Request;
use PDF;
use Mail;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return view('admin.order', compact('order'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
        ]);

        foreach ($request->produk as $productId) {
            OrderProduk::create([
                'order_id' => $order->id,
                'produk_id' => $productId,
            ]);
        }

        Mail::to('consultingparipurna@gmail.com')->send(new OrderMail($order));

        session()->flash('success', 'Berhasil memesan Jasa. Tunggu respons admin.');
        return redirect('order');
    }

    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }
}
