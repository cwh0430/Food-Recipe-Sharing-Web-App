@extends('layouts.app')

@section('content')

<div class="container">

    @if (session('msg'))
    <div class="alert alert-danger" role="alert">
        {{ session('msg') }}
    </div>
    @endif

    <div class="row align-items-start">
        <div class="col">
            <ul class="navbar-nav mr-auto">
                <div class="dropdown-divider"></div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('recipes.filter', ['filter' => 'latest']) }}"
                            class="dropdown-item">Latest</a>
                        <a class="dropdown-item" href="{{ route('recipes.filter', ['filter' => 'favorite']) }}"
                            class="dropdown-item">Favorite</a>
                        <a class="dropdown-item" href="{{ route('recipes.filter', ['filter' => 'random']) }}"
                            class="dropdown-item">Random</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col"><a href="{{ route('home') }}">Lunch</a>&nbsp;&nbsp;</div>
        <div class="col"><a href="{{ route('home') }}">Vegan</a>&nbsp;&nbsp;</div>
        <div class="col"><a href="{{ route('home') }}">Dinner</a>&nbsp;&nbsp;</div>
        <div class="col"><a href="{{ route('home') }}">Desserts</a>&nbsp;&nbsp;</div>
        <div class="col"><a href="{{ route('home') }}">Chicken</a>&nbsp;&nbsp;</div>
        <div class="col"><a href="{{ route('home') }}">Vegetarian</a>&nbsp;&nbsp;</div>
    </div>

    <div class="row">



        @foreach ($recipes as $recipe)
        <div class="col-sm-4 mb-3">
            <a href="{{ route('recipes.show', $recipe->id) }}" id="card-link">
                <div class="card food">
                    <img class="card-img-top" src={{ $recipe->image }} alt="Card image">
                    <div class="card-body">
                        <h4>{{ $recipe->name }}</h4>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection