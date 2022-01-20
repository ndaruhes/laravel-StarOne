<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $games = Game::all();
        if (url()->current() == 'http://127.0.0.1:8000') {
            return view('welcome', compact('games'));
        } else if (url()->current() == 'http://127.0.0.1:8000/games') {
            return view('games', compact('games'));
        }
    }
}
