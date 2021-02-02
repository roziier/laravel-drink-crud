<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // mostra tutti i nomi dei drinks
    public function index() {

        $drinks = Drink::all();
        return view('pages.alldrink', compact('drinks'));

    }
    
    // mostra drink selezionato
    public function show($id) {

        $drink = Drink::findOrFail($id);
        return view('pages.show-drink', compact('drink'));
        
    } 

    // creare una nuova entita'
    public function create() {
        return view('pages.create-drink');
    }

    public function store(Request $request) {
        $drink = Drink::create($request -> all());
        return redirect() -> route('index-drink', $drink -> id);
    }

    // modificare un entità
    public function edit($id) {
        $drink = Drink::findOrFail($id);
        return view('pages.edit-drink', compact('drink'));
    }

    public function update(Request $request, $id) {
        $drink = Drink::findOrFail($id);
        $drink -> update($request -> all());
        return redirect() -> route('index-drink', $drink -> id);
    }

    // cancellare un entità
    public function delete($id) {
        $drink = Drink::findOrFail($id);
        $drink -> delete();
        return redirect() -> route('index-drink');
    }
}
