<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\User;

class WorkshopController extends Controller
{
    public function index(){
        $workshops = Workshop::latest()->get();

        return view('workshops.index', ['workshops' => $workshops]);
    }

    public function show($id){
        $workshop = Workshop::findOrFail($id);
        $user = User::findOrFail($workshop->userID);
        return view('workshops.show', ['workshop' => $workshop,'user' => $user]);
    }

    public function create(){
        return view('workshops.create');
    }

    public function destroy($id){
        $workshop = Workshop::findOrFail($id);
        $workshop->delete();

        return redirect('/workshop');
    }

    public function store(){
        $workshop = new Workshop();

        $workshop->userID = auth()->user()->id;
        $workshop->author = auth()->user()->name;
        $workshop->title = request('title');
        $workshop->subject = request('subject');
        $workshop->time = request('time');
        $workshop->description = request('description');

        $workshop->save();

        return redirect('/workshop');
    }
}
