<?php

namespace App\Http\Controllers;
use App\Models\Character;
use App\Models\Drawer;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showHome(){
        return view('home');
    }

    public function showChars(){
        $characters = Character::all()->sortBy('name');
        return view('characters_list', ['characters' => $characters]);
    }

    public function showDrawers(){
        $drawers = Drawer::all()->sortBy('name');
        return view('drawers_list', ['drawers' => $drawers]);
    }

    public function showAddCharacters(){
        $drawers = Drawer::all()->sortBy('name');
        return view('add_character_form', ['drawers' => $drawers]);
    }

    public function showAddDrawers(){
        return view('add_drawer_form');
    }

    public function showUpdateCharacters(Request $request){
        $character = Character::findOrFail($request->character_id);
        $drawers = Drawer::all()->sortBy('name');
        return view('update_character_form', ['drawers' => $drawers, 'character' => $character]);
    }

    public function showUpdateDrawers(Request $request){
        $drawer = Drawer::findOrFail($request->drawer_id);
        return view('update_drawer_form', ['drawer' => $drawer]);
    }

    public function charactersListOfDrawer(Request $request){
        $drawer = Drawer::findOrFail($request->drawer_id);
        return view('characters_list_of_drawer', ['drawer' => $drawer]);
    }
}
