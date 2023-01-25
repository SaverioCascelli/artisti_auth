@extends('layouts.admin')

@section('content')
    <div class="text-white mb-3 w-50 m-auto">
        <form action="{{route('admin.artist.update', $artist)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="name" class="form-label">Nome artista</label>
            <input value="{{old('name', $artist->name)}}" name="name" type="text" class="form-control my-3" id="name" placeholder="Inserisci nome artista">

            <label for="bio" class="form-label">Biografia</label>
            <textarea name="bio" rows="5" class="form-control my-3" id="name" >{{old('bio', $artist->bio)}}</textarea>

            <button class="btn btn-success" type="submit">AGGIUNGI</button>
        </form>
    </div>
@endsection
