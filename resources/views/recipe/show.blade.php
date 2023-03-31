@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $recipe->name }}</h1>
                <img src="{{ $recipe->image }}" alt="{{ $recipe->name }}" class="img-fluid mb-4">

                <!-- favourite button -->
                <form action="{{ route('favorite.add', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <button class="p-2 bg-red-100 rounded hover:bg-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-red-700 hover:text-red-100">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                    </button>
                </form>

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
        </div>
    </div>
@endsection
