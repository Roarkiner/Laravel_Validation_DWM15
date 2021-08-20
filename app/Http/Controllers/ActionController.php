<?php

namespace App\Http\Controllers;
use App\Models\Character;
use App\Models\Drawer;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function addCharacters(Request $request){
        $request->validate(
            [
                'name' => 'required|max:255',
                'creation_year' => 'required|integer',
                'bd' => 'required|max:255',
                'drawer_id' => 'required|exists:drawers,id',
            ]
        );

        $character = new Character;
        $character->name = $request->name;
        $character->creation_year = $request->creation_year;
        $character->bd = $request->bd;
        $character->drawer_id = $request->drawer_id;
        $character->save();

        $request->session()->flash('added', true);
        $request->session()->flash('name', $character->name);

        return redirect('/characters/list');
    }

    public function deleteCharacters(Request $request){

        $character = Character::findOrFail($request->character_id);
        $character->delete();

        $request->session()->flash('deleted', true);
        $request->session()->flash('name', $character->name);

        return redirect('/characters/list');
    }

    public function updateCharacters(Request $request){
        $request->validate(
            [
                'name' => 'required|max:255',
                'creation_year' => 'required|integer',
                'bd' => 'required|max:255',
                'drawer_id' => 'required|exists:drawers,id',
            ]
        );

        $character = Character::findOrFail($request->id);
        $character->name = $request->name;
        $character->creation_year = $request->creation_year;
        $character->bd = $request->bd;
        $character->drawer_id = $request->drawer_id;
        $character->save();

        $request->session()->flash('modified', true);
        $request->session()->flash('name', $character->name);

        return redirect('/characters/list');
    }


    public function addDrawers(Request $request){
        $request->validate(
            [
                'name' => 'required|max:255',
                'birth_year' => 'required|integer',
                'nationality' => 'required|max:255',
            ]
        );

        $drawer = new Drawer;
        $drawer->name = $request->name;
        $drawer->birth_year = $request->birth_year;
        $drawer->nationality = $request->nationality;
        $drawer->save();

        $request->session()->flash('added', true);
        $request->session()->flash('name', $drawer->name);

        return redirect('/drawers/list');
    }

    public function deleteDrawers(Request $request){
        
        $drawer = Drawer::findOrFail($request->drawer_id);
        $drawer->delete();

        $request->session()->flash('deleted', true);
        $request->session()->flash('name', $drawer->name);

        return redirect('/drawers/list');
    }

    public function updateDrawers(Request $request){
        $request->validate(
            [
                'name' => 'required|max:255',
                'birth_year' => 'required|integer',
                'nationality' => 'required|max:255',
            ]
        );

        $drawer = Drawer::findOrFail($request->id);

        $request->session()->flash('name', $drawer->name);

        $drawer->name = $request->name;
        $drawer->birth_year = $request->birth_year;
        $drawer->nationality = $request->nationality;
        $drawer->save();
        
        $request->session()->flash('modified', true);

        return redirect('/drawers/list');
    }
}
