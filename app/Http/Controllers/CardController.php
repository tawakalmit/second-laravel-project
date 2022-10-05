<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Card;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function index(){
        $card = DB::table('card')->get();
        return view('card', compact('card'));
    }

    public function store(Request $request)
    {
 
        $card = new Card;
 
        $card->name = $request->name;
        $card->job = $request->job;
        $card->description = $request->description;
 
        $card->save();
    }

    public function edit($id){
        $card = DB::table('card')->where('id', $id)->first();
        return view ('cardedit', ['card' => $card]);
    }

    public function update(Request $request, $id){
        $card = Card::find($id);
 
        $card->name = $request->name;
        $card->job = $request->job;
        $card->description = $request->description;

        
        $card->save();
    }

    public function destroy($id){
        $card = Card::find($id);
 
        $card->delete();
    }
}
