<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
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
}