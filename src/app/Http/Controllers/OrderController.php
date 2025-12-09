<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Exhibition;
use App\Models\purchase_method;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create($exhibition_id)
    {
        $exhibition = Exhibition::findOrFail($exhibition_id);
        return view('orders.create', compact('exhibition'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'exhibition_id' => 'required|exists:exhibitions,id',
            'purchase_method_id' => 'required|exists:purchase_methods,id',
            'address_id' => 'required|exists:addresses,id',
        ]);
        $exhibition = Exhibition::findOrFail($request->exhibition_id);

        $sell_id = $exhibition->user_id;
        $buyer_id = Auth::id();

        $order = Order::create([
            'sell_id' => $sell_id,
            'buyer_id' => $buyer_id,
            'exhibition_id' => $exhibition->id,
            'purchase_method_id' => $request->purchase_method_id,
            'address_id' => $request->address_id,
        ]);

        $exhibition->update(['status' => 'sold']);

        return redirect()->route('orders.show', $order->id);
    }

    public function show()
    {
        $order = Order::with(['buyer', 'sell', 'exhibition', 'purchase_method', 'address'])->findOrFail($id);

        return view('orders.show', compact('order'));
    }

    public function index()
    {
        $orders = Order::with(['buyer', 'sell', 'exhibition'])->get();

        return view('orders.index', compact('orders'));
    }
}
