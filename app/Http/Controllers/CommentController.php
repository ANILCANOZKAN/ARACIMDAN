<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Car $car){
        $attributes = \request()->validate([
            'comment' => 'required'
        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['car_id'] = $car->id;
        Comment::create($attributes);
        return back();
    }

    public function pin(Comment $comment){
        $comment->pin = 1;
        $comment->save();
        return back()->with('success', 'Yorum başarıyla sabitlendi.');
    }

    public function Unpin(Comment $comment){
        $comment->pin = 0;
        $comment->save();
        return back()->with('success', 'Sabitlenme başarıyla kaldırıldı.');
    }

}
