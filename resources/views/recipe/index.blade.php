@extends('layouts.app')

@section('content')

<div class="container">

    @if (session('msg'))
    <div class="alert alert-danger" role="alert">
        {{ session('msg') }}
    </div>
    @endif

    @can('isAdmin')
    <div class="text-right">
        <a class="btn btn-info" href="/manage">Manage Recipe</a>
    </div>
    @endcan
    <link href="{{ asset('css/recommendB.css') }}" rel="stylesheet">
    <div class="button-container">
        <div class="col">
            <ul class="navbar-nav mr-auto">
                <div class="dropdown-divider"></div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('recipes.filter', ['filter' => 'latest']) }}"
                            class="dropdown-item">Latest</a>
                        <a class="dropdown-item" href="{{ route('recipes.filter', ['filter' => 'random']) }}"
                            class="dropdown-item">Random</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col">
            <form action="{{ route('home') }}">
                @csrf
                <button type="submit" class="my-button">Lunch</button>
            </form>
        </div>
        <div class="col">
            <form action="{{ route('home') }}">
                @csrf
                <button type="submit" class="my-button">BREAKFAST</button>
            </form>
        </div>
        <div class="col">
            <form action="{{ route('home') }}">
                @csrf
                <button type="submit" class="my-button">VEGE</button>
            </form>
        </div>

        <div class="col">
            <form action="{{ route('home') }}">
                @csrf
                <button type="submit" class="my-button">DINNER</button>
            </form>
        </div>
        <div class="col">
            <form action="{{ route('home') }}">
                @csrf
                <button type="submit" class="my-button">DESSERTS</button>
            </form>
        </div>
        <div class="col">
            <form action="{{ route('home') }}">
                @csrf
                <button type="submit" class="my-button">BREAD</button>
            </form>
        </div>
        <div class="col">
            <form action="{{ route('home') }}">
                @csrf
                <button type="submit" class="my-button">WAFFLE</button>
            </form>
        </div>
    </div>
    <div class="row">

        @foreach ($recipes as $recipe)
        <div class="col-sm-4 mb-3">
            <a href="{{ route('recipes.show', $recipe->id) }}" id="card-link">
                <div class="card food">
                    <img class="card-img-top" src={{ $recipe->image }} alt="Card image" style="width: 100%; height:
                    200px; object-fit: cover;">
                    <div class="card-body" style="height: 80px;">
                        <h4>{{ $recipe->name }}</h4>
                    </div>
                </div>
            </a>
        </div>


        @endforeach
    </div>

    <div style="margin-top: 40px;">
        {{ $recipes->links('vendor.pagination.bootstrap-5', ['paginator' =>
        $recipes->appends(request()->except('page')),
        'class' => 'my-4']) }}
    </div>


</div>
@endsection


