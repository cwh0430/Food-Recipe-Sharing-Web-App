@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Favorite Page</h1>
        @if (session('msg'))
            <div class="alert alert-danger" role="alert">
                {{ session('msg') }}
            </div>
        @endif

        <div class="row">

            @foreach ($recipes as $recipe)
                <div class="col-sm-4 mb-3">
                    <a href="{{ route('recipes.show', $recipe->id) }}" id="card-link">
                        <div class="card food">
                            <img class="card-img-top" src={{ $recipe->image }} alt="Card image"
                                style="width: 100%; height:
                    200px; object-fit: cover;">
                            <div class="card-body" style="height: 80px;">
                                <h4>{{ $recipe->name }}</h4>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
