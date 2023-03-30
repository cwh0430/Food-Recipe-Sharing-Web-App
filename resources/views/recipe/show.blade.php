@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $recipe->name }}</h1>
            <img src="{{ $recipe->image }}" alt="{{ $recipe->name }}" class="img-fluid mb-4">
            <p>{{ $recipe->description }}</p>
            <h2>Ingredients:</h2>
            <ul>
                @foreach ($recipe->getIngredients as $ingredient)
                <li> {{ $ingredient->quantity }} {{ $ingredient->units }} {{
                    $ingredient->name }} @if($ingredient->additionalInfo) ({{ $ingredient->additionalInfo
                    }}) @endif


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
    </div>
</div>
@endsection