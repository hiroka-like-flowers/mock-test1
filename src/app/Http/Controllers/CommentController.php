<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create([
            'user_id' => auth()->id(),
            'exhibition_id' => $request->exhibition_id,
            'text' => $request->text,
        ]);
        return back();
    }
}
