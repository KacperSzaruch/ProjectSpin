<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\User;

class MaterialController extends Controller
{
   public function index(){
        $materials = Material::latest()->get();

        return view('materials.index', ['materials' => $materials]);
    }

    public function show($id){
        $material = Material::findOrFail($id);
        $user = User::findOrFail($material->userID);
        return view('materials.show', ['material' => $material, "user" => $user]);
    }

    public function create(){
        return view('materials.create');
    }

    public function destroy($id){
        $material = Material::findOrFail($id);
        $material->delete();

        return redirect('/material');
    }

    public function store(){
        $material = new Material();

        $material->userID = auth()->user()->id;
        $material->title = request('title');
        $material->subject = request('subject');
        $material->content = request('description');
        if( request('file') == null ) {
            $material->filename = "";
        } else {
            $material->filename = request("file");
        }

        $material->save();

        return redirect('/material');
    }
}
