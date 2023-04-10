@extends('layouts.app')

@section('content')

<div class="container">

  @if (session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif


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
            <button class="btn btn-danger" data-toggle="modal" data-target="#dltModal-{{$recipe->id}}"
              style="margin-right:5px;">Delete</button>
          </div>
        </td>
      </tr>

      <!-- Modal -->
      <div class="modal fade" id="dltModal-{{$recipe->id}}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete Recipe</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete the recipe <strong>{{$recipe->name}}</strong>?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <a class="btn btn-danger" href="/delete/{{$recipe->id}}" style="margin-right:5px;">Delete</a>
            </div>
          </div>
        </div>
      </div>
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