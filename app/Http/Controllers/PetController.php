<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index(){
        $Pets = Pet::all();
        return view('welcome', compact('Pets'));
    }
    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        $newEntry= New Pet;
        $newEntry->race = $request->race;
        $newEntry->age = $request->age;
        $newEntry-> save();
        return redirect()-> back();
    }

    public function show ($id){
        $show= Pet::find($id);
        return view("pages.show", compact('show'));
    }

    public function destroy($id){
        $destroy = Pet::find($id);
        $destroy-> delete();
        return redirect('/');
    }

    public function edit($id){
        $edit= Pet::find($id);
        return view ('pages.edit', compact('edit'));
    }

    public function update (Request $request, $id){
        $update = Pet::find($id);
        $update->race = $request->race;
        $update->age = $request->age;
        $update-> save();
        return redirect('/');
    }
}
