@extends('layouts.adminapp')

@section('content')
<div class="container">

    <div class="row">
        @can('create', App\Models\Recipe::class)
        <div class="btn btn-success btn-lg">
            Add New Recipe
        </div>
        @endcan
        @foreach ($recipes as $recipe)
        <div class="col-sm-4 mb-3">
            <div class="card food">
                <img class="card-img-top" src={{$recipe->image}} alt="Card image">
                <div class="card-body">
                    <h4>{{$recipe->name}}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection