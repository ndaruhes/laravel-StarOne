@extends('layouts/app')
@section('title', 'Create Game')

@section('content')
    <div class="container">
        <div class="col-md-6 bg-light management-wrapper">
            <h3><i class="uil uil-plus me-1"></i>Create Game</h3>
            <p>Create the game and make it live for public</p>
            <hr>
            <form action="{{ route('game.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Judul Game</label>
                    <input type="text" class="form-control" name="judul" placeholder="Judul Game">
                    @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Publisher</label>
                    <input type="text" class="form-control" name="publisher" placeholder="Publisher">
                    @error('publisher') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
                    @error('deskripsi') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Rilis</label>
                    <input type="number" class="form-control" name="tahun_rilis" placeholder="Tahun Rilis">
                    @error('tahun_rilis') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
