@extends('layouts.admin')

@section('content')
   <div class="container py-3 text-white">
    <p class=" text-white">
        Info su:
    </p>
    <h3 class="fw-bolder my-3 text-white">
        {{ $artist->name }}
    </h3>
    <h5>Biografia</h5>
    <p class="w-50">{{$artist->bio}}</p>
    <div>
        <h5>Elenco opere</h5>
        <ul>
            @forelse ($artist->artworks as $artwork)
                <li>{{$artwork->name}}</li>
            @empty
                <li>Nessun risultato trovato</li>
            @endforelse
        </ul>
    </div>


    <div class="d-flex py-5">
        <a class="btn btn-warning" href="{{route('admin.artist.edit', $artist)}}">MODIFICA</a>
        <a class="btn btn-danger mx-3" href="">ELIMINA</a>
    </div>
   </div>
@endsection
