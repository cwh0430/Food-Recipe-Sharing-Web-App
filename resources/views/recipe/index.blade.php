@extends('layouts.app')

@section('content')

<div class="container">

    @if (session('msg'))
    <div class="alert alert-danger" role="alert">
        {{ session('msg') }}
    </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
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
        <div class="col2">
            <form action="{{ route('search') }}" method="GET" class="d-flex">
                <input type="search" name="query" class="form-control " placeholder="Search for food" aria-label="Search for food">
                <button type="submit" class="btn btn-outline-secondary ms-2">Search</button>
            </form>
            <div class="search-results-container d-none">
                <ul class="list-group search-results-list">
                </ul>
            </div>
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


<script>
    $(document).ready(function () {
        $("input[name='query']").on('keyup', function () {
            var query = $(this).val();

            if (query.length > 2) {
                $.ajax({
                    url: "{{ route('search') }}",
                    data: {
                        query: query,
                        _token: "{{ csrf_token() }}"
                    },
                    method: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        $('.search-results-container').removeClass('d-none');
                        var resultHtml = '';

                        if (response && response.length > 0) {
                            response.forEach(function (recipe) {
                                resultHtml += `
                                <li class="list-group-item">
                                    <a href="/recipes/${recipe.id}">${recipe.name}</a>
                                </li>`;
                            });
                        } else {
                            resultHtml = '<li class="list-group-item">No results found.</li>';
                        }

                        $('.search-results-list').html(resultHtml);
                    },
                    error: function () {
                        $('.search-results-container').addClass('d-none');
                    }
                });
            } else {
                $('.search-results-container').addClass('d-none');
            }
        });

        $(document).on('click', function (e) {
            if (!$(e.target).closest('.search-results-container').length && !$(e.target).closest('.col2').length) {
                $('.search-results-container').addClass('d-none');
            }
        });
    });
</script>



@endsection