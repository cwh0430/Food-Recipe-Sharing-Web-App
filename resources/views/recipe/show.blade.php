<?php
use App\Models\Recipe;
use Maize\Markable\Models\Favorite;

$user = auth()->user();
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $recipe->name }}</h1>
                <img src="{{ $recipe->image }}" alt="{{ $recipe->name }}" class="img-fluid mb-4">

                <!-- favourite button -->
                @auth
                    @if (Favorite::has($recipe, $user))
                        <form action="{{ route('favorite.remove', $recipe->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button style="border-color:red; color:red"><a class="btn">Remove from
                                    Favourites</a></button>
                        </form>
                    @else
                        <form action="{{ route('favorite.add', $recipe->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button style="border-color:red; color:red"><a class="btn">Add to Favourites</a></button>
                        </form>
                    @endif
                @endauth

                <p>{{ $recipe->description }}</p>
                <h2>Ingredients:</h2>
                <ul>
                    @foreach ($recipe->getIngredients as $ingredient)
                        <li> {{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->unit }} {{ $ingredient->name }}
                            @if ($ingredient->pivot->additionalInfo)
                                ({{ $ingredient->pivot->additionalInfo }})
                            @endif


                        </li>
                    @endforeach
                </ul>
                <h2>Steps:</h2>
                <ol>
                    @foreach ($recipe->getSteps as $step)
                        <li>{{ $step->steps_desc }}</li>
                    @endforeach
                </ol>
            </div>

            {{-- <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Related Recipes</h3>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($relatedRecipes as $relatedRecipe)
                        <li><a href="{{ route('recipes.show', $relatedRecipe->id) }}">{{ $relatedRecipe->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div> --}}

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <h3>To Explore More</h3>
                </div>
                @foreach($recommendedRecipes as $recommendedRecipe)
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="{{ $recommendedRecipe->image }}" alt="{{ $recommendedRecipe->name }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $recommendedRecipe->name }}</h5>
                                <a href="{{ route('recipes.show', $recommendedRecipe->id) }}" class="btn btn-primary">View Recipe</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>


@endsection
