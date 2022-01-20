@extends('layouts/app')
@section('title', 'Edit Game')

@section('content')
    <div class="container">
        <div class="col-md-6 bg-light management-wrapper">
            <h3><i class="uil uil-plus me-1"></i>Edit Game</h3>
            <p>Edit the game and save to make it live for public</p>
            <hr>
            <form action="{{ route('game.update', $game->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Judul Game</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul Game"
                        value="{{ $game->judul }}">
                    @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Publisher</label>
                    <input type="text" class="form-control" name="publisher" placeholder="Publisher"
                        value="{{ $game->publisher }}">
                    @error('publisher') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                        value="{{ $game->deskripsi }}">
                    @error('deskripsi') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Rilis</label>
                    <input type="number" class="form-control" name="tahun_rilis" placeholder="Tahun Rilis"
                        value="{{ $game->tahun_rilis }}">
                    @error('tahun_rilis') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
