<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{

    // Method untuk menampilkan halaman game
    public function index()
    {
        $games = Game::all();
        return view('games/index', compact('games'));
    }

    // Method untuk menampilkan halaman game
    public function create()
    {
        return view('games/create');
    }

    // Method untuk menambah data game
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'judul' => 'required|string|min:15|max:100',
            'publisher' => 'required|string|min:5|max:30',
            'deskripsi' => 'required|string|min:10|max:200',
            'tahun_rilis' => 'required|integer|min:2012|max:2022',
        ]);

        Game::create([
            'judul' => $request->judul,
            'publisher' => $request->publisher,
            'deskripsi' => $request->deskripsi,
            'tahun_rilis' => $request->tahun_rilis,
        ]);

        return redirect('/games/manage')->with('success', 'Game berhasil ditambahkan');
    }

    // Method untuk menampilkan form edit
    public function edit(Request $request, $idGame)
    {
        $game = Game::find($idGame);
        return view('games/edit', compact('game'));
    }

    // Method untuk mengupdate data game
    public function update(Request $request, $idGame)
    {
        // validasi data
        $request->validate([
            'judul' => 'required|string|min:15|max:100',
            'publisher' => 'required|string|min:5|max:30',
            'deskripsi' => 'required|string|min:10|max:200',
            'tahun_rilis' => 'required|integer|min:2012|max:2022',
        ]);

        // mencari data game dari database & langsung update
        Game::where('id', '=', $idGame)->update([
            'judul' => $request->judul,
            'publisher' => $request->publisher,
            'deskripsi' => $request->deskripsi,
            'tahun_rilis' => $request->tahun_rilis,
        ]);

        return redirect('/games/manage')->with('success', 'Game berhasil diedit');
    }

    // Method untuk menghapus game
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect('/games/manage')->with('success', 'Game berhasil dihapus');
    }
}
