<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Question;

class CommentController extends Controller
{
    public function store($id){
        $comment = new Comment();
        $question = Question::findOrFail($id);

        $comment->userID = auth()->user()->id;
        $comment->username = auth()->user()->name;
        $comment->questionID = $id;
        $comment->comment = request('comment');

        $question->state = "pending";

        $question->save();
        $comment->save();

        return redirect('/question/'.$id);
    }
}
