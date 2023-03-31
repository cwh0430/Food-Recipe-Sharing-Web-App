@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $recipe->name }}</h1>
                <img src="{{ $recipe->image }}" alt="{{ $recipe->name }}" class="img-fluid mb-4">

                <!-- favourite button -->
                <form action="{{ route('favorite.add', $recipe->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <button><a class="btn" data-count="0"><span>&#x2764;</span> Favourite</a></button>
                </form>

                <!-- try to check if item already in favorite model -->
                {{-- @auth
                    @if (auth()->user()->favorites->contains($recipe->id))
                        <form action="{{ route('favorite.add', $recipe->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button><a class="btn" data-count="0"><span>&#x2764;</span> Favourite</a></button>
                            <!-- <button class="p-2 bg-red-100 rounded hover:bg-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-red-700 hover:text-red-100">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                    </button> -->
                        </form>
                    @else
                        <form action="{{ route('favorite.remove', $recipe->id) }}" method="DELETE"
                            enctype="multipart/form-data">
                            @csrf
                            <button><a class="btn" data-count="0"><span>&#x2764;</span> Unfavourite</a></button>
                        </form>
                    @endif
                @endauth --}}

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

    <style>
        /* html {
                                                            background: #f5f5f5;
                                                            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
                                                        }

                                                        body {
                                                            margin: 30px auto 0 auto;
                                                            width: 450px;
                                                            font-size: 75%;
                                                        }

                                                        h3 {
                                                            margin-top: 30px;
                                                            font-size: 18px;
                                                            color: #555;
                                                        }

                                                        p {
                                                            padding-left: 10px;
                                                        } */


        /*
                                                         * Basic button style
                                                         */
        .btn {
            box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.5) inset;
            border-radius: 3px;
            border: 1px solid;
            display: inline-block;
            height: 18px;
            line-height: 18px;
            padding: 0 8px;
            position: relative;

            font-size: 12px;
            text-decoration: none;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
        }



        .btn {
            background-color: #dbdbdb;
            border-color: #bbb;
            color: #666;
        }

        .btn:hover,
        .btn.active {
            text-shadow: 0 1px 0 #b12f27;
            background-color: #f64136;
            border-color: #b12f27;
        }

        .btn:active {
            box-shadow: 0 0 5px 3px rgba(0, 0, 0, 0.2) inset;
        }

        .btn span {
            color: #f64136;
        }

        .btn:hover,
        .btn:hover span,
        .btn.active,
        .btn.active span {
            color: #eeeeee;
        }

        .btn:active span {
            color: #b12f27;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.3);
        }
    </style>
@endsection
