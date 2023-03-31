<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Maize\Markable\Models\Favorite;

class FavouriteController extends Controller
{
    public function favourites()
    {
        if (!auth()->check()) {
            return redirect()->route('auth.login')->with('error', 'Please login to access this page.');
        }
        $recipes = Recipe::whereHasFavorite(
            auth()->user()
        )->get();
        // dd($recipes);
        return view('recipe.favourites', compact('recipes'));
    }

    public function favoriteAdd($id)
    {
        $recipe = Recipe::find($id);
        if (!auth()->check()) {
            return redirect()->route('auth.login')->with('error', 'Please login to access this page.');
        }
        $user = auth()->user();
        Favorite::add($recipe, $user);
        session()->flash('success', 'Recipe is Added to Favourite Successfully !');

        return redirect()->route('favourites');
    }

    public function favoriteRemove($id)
    {
        $recipe = Recipe::find($id);
        if (!auth()->check()) {
            return redirect()->route('auth.login')->with('error', 'Please login to access this page.');
        }
        $user = auth()->user();
        Favorite::remove($recipe, $user);
        session()->flash('success', 'Recipe is Remove from Favourite Successfully !');

        return redirect()->route('favourites');
    }
}
