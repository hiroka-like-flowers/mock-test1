<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $sellOrders = Order::with(['exhibition', 'buyer'])->where('sell_id', $user->id)->get();
        $buyOrders = Order::with(['exhibition', 'sell'])->where('buyer_id', $user->id)->get();

        return view('mypage', compact('user', 'sellOrders', 'buyOrders'));
    }

}
