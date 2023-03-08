@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
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