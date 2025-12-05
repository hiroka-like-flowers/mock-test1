<?php

namespace App\Http\Controllers;

use App\Models\like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function toggle(Request $request)
    {
        $like = Like::where('user_id', auth()->id())
                    ->where('exhibition_id', $request->exhibition_id)
                    ->first();

        if ($like) {
            $like->delete();
        } else {
            Like::create([
                'user_id' => auth()->id(),
                'exhibition_id' => $request->product_id,
            ]);
        }
        return back();
    }
}
