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
                    <button><a title="Love it" class="btn" data-count="0"><span>&#x2764;</span> Favourite</a></button>
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

        /*
                     * Counter button style
                     */
        .btn-counter {
            margin-right: 39px;
        }

        .btn-counter:after,
        .btn-counter:hover:after {
            text-shadow: none;
        }

        .btn-counter:after {
            border-radius: 3px;
            border: 1px solid #d3d3d3;
            background-color: #eee;
            padding: 0 8px;
            color: #777;
            content: attr(data-count);
            left: 100%;
            margin-left: 8px;
            margin-right: -13px;
            position: absolute;
            top: -1px;
        }

        .btn-counter:before {
            transform: rotate(45deg);
            filter: progid:DXImageTransform.Microsoft.Matrix(M11=0.7071067811865476, M12=-0.7071067811865475, M21=0.7071067811865475, M22=0.7071067811865476, sizingMethod='auto expand');

            background-color: #eee;
            border: 1px solid #d3d3d3;
            border-right: 0;
            border-top: 0;
            content: '';
            position: absolute;
            right: -13px;
            top: 5px;
            height: 6px;
            width: 6px;
            z-index: 1;
            zoom: 1;
        }

        /*
                     * Custom styles
                     */
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
