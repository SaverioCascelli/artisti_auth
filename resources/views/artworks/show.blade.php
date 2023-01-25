@extends('layouts.admin')


@section('content')
<div class="container d-flex justify-content-center align-items-center flex-column text-white">

        <img src="{{$artwork->image}}" class="card-img-top text-center" alt="{{$artwork->name}}">
        <div class="card-body">
            <h3 class="card-title text-center py-3">ID: {{$artwork->id}}</h5>
            <h5 class="card-title">Artwork name: {{$artwork->name}}</h5>
            <p class="card-text py-3">Description: {!!$artwork->description!!}</p>
            <div>
                <a class="btn btn-warning mb-2" href="{{ route('admin.artwork.edit', $artwork) }}">Edit</a>
                <a class="btn btn-primary my-5" href="{{route('admin.artwork.index')}}" >BACK TO PROJECTS</a>
                <a class="btn btn-warning" href="{{route('admin.artwork.create')}}">Create New Artwork</a>
            </div>
        </div>
    </div>



</div>

@endsection
