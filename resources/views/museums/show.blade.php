@extends('layouts.admin')

@section('content')
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif

    <div class="container text-white">

        <h1>Museo:</h1>
        <h5>{{$museum->name}}</h5>
        <h6>Location: {{$museum->nation}}</h6>
        <a class="btn btn-primary" href="{{route('admin.museums.index')}}">Torna alla lista</a>

    </div>
@endsection
