@extends('layouts/app')

@section('title', 'PT StarOne')

@section('content')
    <!-- BANNER -->
    <div class="container bg-dark banner">
        <h1>Welcome to StarOne</h1>
        <p>Kumpulan informasi game menari hasil karya anak bangsa dan terupdate setiap harinya</p>
        <a href="" class="btn btn-warning">Manage Game</a>
        <a href="" class="btn btn-info">Contact Us</a>
    </div>

    <!-- GAME CONTENT -->
    <div class="container mt-4">
        <div class="row">
            @foreach ($games as $game)
                <div class="col-md-3 mb-4">
                    <div class="col-md-12 bg-light game-item">
                        <span class="title">{{ $game->judul }}</span>
                        <span class="publisher badge bg-info">{{ $game->publisher }}</span>
                        <span class="deskripsi">{{ $game->deskripsi }}</span>
                        <small class="tahun_rilis">Dirilis pada {{ $game->tahun_rilis }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
