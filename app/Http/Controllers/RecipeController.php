<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    public function index()
    {
        $recipes = Recipe::all();
        return view('recipe.index', ['recipes' => $recipes]);
    }

    public function adminIndex()
    {
        $recipes = Recipe::all();
        return view('recipe.recipelist', ['recipes' => $recipes]);
    }
    public function create()
    {
        return view('recipe.create');
    }

    public function edit()
    {
        return view('recipe.edit');
    }

    public function destroy()
    {
        return view('recipe.delete');
    }

    public function recipes()
    {
        $recipes = Recipe::all();
        return view('recipe.recipes', ['recipes' => $recipes]);
    }

    public function favourites()
    {
        $recipes = Recipe::all();
        return view('recipe.favourites', ['recipes' => $recipes]);
    }
    
    public function filter(Request $request)
    {
        $filter = $request->get('filter');

        switch ($filter) {
            case 'latest':
                $recipes = Recipe::latest()->paginate(10);
                break;
            case 'favorite':
                $recipes = Recipe::orderBy('favorites', 'desc')->paginate(10);
                break;
            case 'random':
                $recipes = Recipe::inRandomOrder()->paginate(10);
                break;
            default:
                $recipes = Recipe::paginate(10);
                break;
        }

        return view('recipe.recipes', ['recipes' => $recipes]);
    }
}
