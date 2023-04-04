@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>My Favourite</h1>
        @if (session('msg'))
            <div class="alert alert-danger" role="alert">
                {{ session('msg') }}
            </div>
        @endif

        @if (count($recipes) === 0)
            <div style="width: 100%; margin:auto; padding:10%; background-color:rgb(239, 239, 239)">
                <h1 style="text-align: center; font-size:50px">Opps, your favourite is empty right now</h1><br><br>
                <p style="text-align: center; font-size:20px">Try add your favourite recipes by clicking the "<span
                        style="color:red">Add to Favourites</span>" button of the recipe.</p>
            </div>
        @else
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
        @endif
    </div>
@endsection
