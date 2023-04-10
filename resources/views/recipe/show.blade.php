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

            <p>{{ $recipe->desc }}</p>


            <!-- favourite button -->
            @guest
            <form action="{{ route('favorite.add', $recipe->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <button style="border-color:red; color:red"><a class="btn">Add to Favourites</a></button>
            </form>
            @else
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
            @endguest

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

            <p></p>
            <a style="text-decoration: none; font-size: 18px; color: red;" href="{{ route('review', $recipe->id) }}">
                Rate and review this recipe to help us improve!
            </a>

            <p></p>
            <h5>Reviews:</h5>
            <ul style="list-style-type: none; margin: 0; padding: 0; border: 1px solid #ddd;">
                @foreach ($recipe->getReviews as $review)
                <li style="padding: 8px 16px; border-bottom: 1px solid #ddd;"> {{ $review->star_rating }} ★ : {{
                    $review->comments }}</li>
                @endforeach
            </ul>

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
                <div class="col-sm-4 mb-3 ">
                    <div class="card food">
                        <img src="{{ $recommendedRecipe->image }}" alt="{{ $recommendedRecipe->name }}"
                            class="card-img-top" style="width: 100%; height:
                            200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $recommendedRecipe->name }}</h5>
                            <a href="{{ route('recipes.show', $recommendedRecipe->id) }}" class="btn btn-primary">View
                                Recipe</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    @endsection