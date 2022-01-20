@extends('layouts/app')

@section('title', 'All Games | PT StarOne')

@section('content')
    <!-- GAME CONTENT -->
    <div class="container">
        <h3><i class="uil uil-basketball me-1"></i> All Games</h3>
        <hr>
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
