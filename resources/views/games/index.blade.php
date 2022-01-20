@extends('layouts/app')
@section('title', 'Manage Game')

@section('content')
    <div class="container">
        <div class="col-md-8 bg-light management-wrapper">
            <h3><i class="uil uil-create-dashboard me-1"></i>Manage Games</h3>
            <p>Manage the games and don't forget to recheck it</p>
            <hr>
            <a href="{{ url('games/create') }}" class="btn btn-dark btn-sm mb-3"><i class="uil uil-plus me-1"></i>Add
                Games</a>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <i class="uil uil-check-circle me-1"></i>{{ session('success') }}
                </div>
            @endif
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Publisher</th>
                        <th>Deskripsi</th>
                        <th>Tahun Rilis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $number = 1; ?>
                    @foreach ($games as $game)
                        <tr>
                            <td>{{ $number++ }}</td>
                            <td>{{ $game['judul'] }}</td>
                            <td>{{ $game['publisher'] }}</td>
                            <td>{{ $game['deskripsi'] }}</td>
                            <td>{{ $game['tahun_rilis'] }}</td>
                            <td>
                                <a href="{{ route('game.edit', $game->id) }}" class="text-primary"><i
                                        class="uil uil-edit"></i></a>
                                <a href="#" class="text-danger"
                                    onclick="event.preventDefault();document.getElementById('delete-form-{{ $game->id }}').submit();">
                                    <i class="uil uil-trash-alt"></i>
                                    <form id="delete-form-{{ $game->id }}"
                                        action="{{ route('game.delete', $game->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
