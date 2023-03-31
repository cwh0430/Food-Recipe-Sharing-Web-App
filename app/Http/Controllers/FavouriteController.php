<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Maize\Markable\Models\Favorite;

class FavouriteController extends Controller
{
    public function favourites()
    {
        $recipes = Recipe::whereHasFavorite(
            auth()->user()
        )->get();
        // dd($recipes);
        return view('recipe.favourites', compact('recipes'));
    }

    // public function favouriteAdd($id)
    // {
    //     $recipe = Recipe::find($id);
    //     $user = auth()->user();
    //     Favorite::add($recipe, $user);
    //     session()->flash('success', 'Recipe is Added to Favourite Successfully !');

    //     return redirect()->route('favourites');
    // }

    // public function favouriteRemove($id)
    // {
    //     $recipe = Recipe::find($id);
    //     $user = auth()->user();
    //     Favorite::remove($recipe, $user);
    //     session()->flash('success', 'Recipe is Remove to Favourite Successfully !');

    //     return redirect()->route('favourites');
    // }
}