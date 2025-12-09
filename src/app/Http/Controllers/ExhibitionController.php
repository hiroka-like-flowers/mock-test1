<?php

namespace App\Http\Controllers;

use App\Models\Exhibition;
use App\Models\Category;
use App\Models\Condition;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function index(Request $request)/* 商品一覧 */
    {
        $exhibitions = Exhibition::all();

        return view('index', compact('exhibitions'));
    }

    public function show($item_id)/* 詳細画面 */
    {
        $exhibition = Exhibition::with(['category', 'condition', 'comments.user', 'likes'])->findOrFail($item_id);
        $categories = Category::all();
        $conditions = Condition::all();

        return view('item', compact('exhibition', 'categories', 'conditions'));
    }

    public function create()/* 商品登録 */
    {
        return view('sell');
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
