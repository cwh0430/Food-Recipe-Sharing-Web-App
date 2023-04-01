@extends('layouts.app')

@section('content')

<div class="container">


  <div style="margin-bottom:20px;" class="text-right">
    <a class="btn btn-primary" href="/create">Add New Recipe</a>
  </div>

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($recipes as $recipe)
      <tr>
        <td>{{$recipe->id}}</td>
        <td>{{$recipe->name}}</td>
        <td><a class="btn btn-warning" href="#">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection