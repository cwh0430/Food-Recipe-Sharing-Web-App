@extends('layouts.app')

@section('content')


<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Image URL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Product 1</td>
      <td>Description 1</td>
      <td><img src="https://example.com/image1.jpg" alt="Product 1" width="100"></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Product 2</td>
      <td>Description 2</td>
      <td><img src="https://example.com/image2.jpg" alt="Product 2" width="100"></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Product 3</td>
      <td>Description 3</td>
      <td><img src="https://example.com/image3.jpg" alt="Product 3" width="100"></td>
    </tr>
  </tbody>
</table>

@endsection