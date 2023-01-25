@extends('layouts.admin')

@section('content')

<div class="container text-white">
    <form action="{{route('admin.museums.store')}}" method="POST" class="w-50">
        @csrf
        <div class="mb-3">
            <label for="museum-name" class="form-label">Nome museo</label>
            <input type="text" class="form-control" id="museum-name" placeholder="Inserisci nome museo..." name="name">
        </div>
        <div class="mb-3">
            <label for="nation" class="form-label">Stato</label>
            <input type="text" class="form-control" id="nation" placeholder="Inserisci stato..." name="nation">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</div>

@endsection
