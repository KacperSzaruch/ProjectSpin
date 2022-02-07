<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;
use App\Models\Comment;

class QuestionController extends Controller
{
    public function index(){
        $questions = Question::latest()->get();

        return view('questions.index', ['questions' => $questions]);
    }

    public function show($id){
        $question = Question::findOrFail($id);
        $user = User::findOrFail($question->userID);
        $comments = Comment::where('questionID', $question->id)->get();
        return view('questions.show', ['question' => $question, "user" => $user, "comments" => $comments]);
    }

    public function create(){
        return view('questions.create');
    }    

    public function store(){
        $question = new Question();
        
        $question->userID = auth()->user()->id;
        $question->author = auth()->user()->name;
        $question->question = request('question');
        $question->subject = request('subject');
        $question->state = "not_answered";
        if( request('type') != null ) {
            $question->type = "anonymous";
        } else {
            $question->type = "not_anonymous";
        }
        

        $question->save();

        return redirect('/question');
    }

    public function update($id){
        $question = Question::findOrFail($id);
        $question->state = "answered";

        $question->save();

        return redirect('/question');
    }

    public function destroy($id){
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect('/question');
    }
}
