<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Card;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function index(){
        $card = Card::all();
        return view('card', compact('card'));
    }

    public function store(Request $request)
    {
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->storeAs('image', $filename);

        $card = new Card;
 
        $card->name = $request->name;
        $card->job = $request->job;
        $card->description = $request->description;
        $card->image = $request->file('image')->getClientOriginalName();
 
        $card->save();

        return redirect('card')->with('status', 'Data successfully added');
    }

    public function edit($id){
        $card = Card::find($id);
        return view ('cardedit', compact('card'));
    }

    public function update(Request $request, $id){

        $card = Card::find($id);
 
        $card->name = $request->name;
        $card->job = $request->job;
        $card->description = $request->description;

        if(file_exists($request->file('image'))){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->storeAs('image', $filename);
            $card->image = $request->file('image')->getClientOriginalName();
        } else {

        }

        
        $card->save();

        return redirect('card')->with('status', 'Data successfully Updated');
    }

    public function destroy($id){
        $card = Card::find($id);
 
        $card->delete();

        return redirect('card')->with('status', 'Data successfully Deleted');
    }
}
