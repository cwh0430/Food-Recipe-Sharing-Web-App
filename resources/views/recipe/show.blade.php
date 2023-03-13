@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Page</h1>

    <p>{{$recipe->name}}</p>
    <p>{{$recipe->desc}}</p>

    <h3>Ingredients</h3>


</div>
@endsection