<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Card;

class HomeController extends Controller
{
    public function index() {
        $card = DB::table('card')->get();
        return view('homepage', compact('card'));
    }
}
