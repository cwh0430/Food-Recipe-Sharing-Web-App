@extends('layouts.app')

@section('content')


<div class="container">

    @if (session('msg'))
    <div class="alert alert-danger" role="alert">
        {{ session('msg') }}
    </div>
    @endif

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}"></a>
        </li>
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

    <div class="row">
        @foreach ($recipes as $recipe)
        <div class="col-sm-4 mb-3">
            <div class="card food">
                <img class="card-img-top" src={{ $recipe->image }} alt="Card image">
                <div class="card-body">
                    <h4>{{ $recipe->name }}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection