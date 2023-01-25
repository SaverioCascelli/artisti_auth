@extends('layouts.admin')

@section('content')
<div class="container bg-dark vh-100 my-5">
    <div class="-flex justify-content-center flex-column">
    <h1 class="text-center text-white mb-4">ARTWORKS DB</h1>
                <table class="table table-striped text-white">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">artist ID</th>
                            <th scope="col">Museum ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Year</th>
                            <th scope="col">actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        @foreach ($all_artworks as $artwork)
                            <tr class="text-white">
                                <td class="text-white">{{ $artwork->id }}</td>
                                <td class="text-white">{{ $artwork->artist_id }}</td>
                                <td class="text-white">{{ $artwork->museum_id }}</td>
                                <td class="text-white">{{ $artwork->name }}</td>
                                <td class="text-white">{{ $artwork->year }}</td>
                                <td>
                                    <a class="btn btn-success me-2" href="">Vai</a>
                                    <a class="btn btn-warning me-2" href="">Edita</a>
                                    <form action="" method="POST" class="d-inline"
                                        onsubmit="return confirm('Confermi l\'eliminazione di: {{ $artwork->name }}?')"
                                        class="d-inline" action="" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
</div>

@endsection