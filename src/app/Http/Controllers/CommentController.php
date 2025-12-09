<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Exhibition;

class CommentController extends Controller
{
    public function store(Request $request, $item_id)
    {
        $request->validate([
            'comment' => 'required|string|max:255'
        ]);
        $exhibition = Exhibition::findOrFail($item_id);
        Comment::create([
            'user_id' => auth()->id(),
            'exhibition_id' => $item_id,
            'text' => $request->text,
        ]);
        return redirect()->back();
    }
}
