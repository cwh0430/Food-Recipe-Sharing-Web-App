@extends('layouts.app')

@section('content')

<div class="container">


  <div style="margin-bottom:20px;" class="text-right">
    <a class="btn btn-primary" href="/create">Add New Recipe</a>
  </div>

  <table class="table-bordered table-hover table">
    <thead>
      <tr>
        <th class="col-1">ID</th>
        <th class="col-7">Name</th>
        <th class="col-2">Operations</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($recipes as $recipe)
      <tr>
        <td>{{$recipe->id}}</td>
        <td>{{$recipe->name}}</td>
        <td>
          <div class="column text-center">
            <a class="btn btn-success" href="/recipes/{{$recipe->id}}" style="margin-right:5px;">View</a>
            <a class="btn btn-warning" href="/edit/{{$recipe->id}}" style="margin-right:5px;">Edit</a>
            <a class="btn btn-danger" href="/delete/{{$recipe->id}}" style="margin-right:5px;">Delete</a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div style="margin-top: 40px;">
    {{ $recipes->links('vendor.pagination.bootstrap-5', ['paginator' =>
    $recipes->appends(request()->except('page')),
    'class' => 'my-4']) }}
  </div>
</div>


@endsection