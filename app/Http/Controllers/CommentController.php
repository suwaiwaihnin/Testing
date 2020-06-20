<?php

namespace App\Http\Controllers;

use App\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function  create(){
        $comment  = new Comment;
        $comment->content = request()->content;
        $comment->article_id = request()->article_id;
        $comment->user_id = auth()->user()->id;
        $comment->save();
        return back();

    }

    public function delete($id){
        $data = Comment::find($id);
        $data->delete();
        return back();
    }
}
