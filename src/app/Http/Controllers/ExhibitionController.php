<?php

namespace App\Http\Controllers;

use App\Models\Exhibition;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function index(Request $request)/* 商品一覧 */
    {
        $exhibitions = Exhibition::all();

        return view('exhibitions.index', compact('exhibitions'));
    }

    public function show($id)/* 詳細画面 */
    {
        $exhibition = Exhibition::(['comments.user', 'likes'])->findOrFail($id);
        return view('exhibitions.show', compact('exhibition'));
    }

    public function create()/* 商品登録 */
    {
        return view('exhibitions.create');
    }

    public function store(Request $request)/* 商品登録処理 */
    {
        $exhibition = Exhibition::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'image' => $request->image,
            'price' => $request->price,
            'brand' => $request->brand,
            'description' => $request->description,
            'category_id' => $request->category,
            'condition_id' => $request->condition,
        ]);
        return redirect()->route('exhibitions.show', $exhibition->id);
    }
}
