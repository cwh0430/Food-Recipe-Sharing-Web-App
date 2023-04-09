<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function showReview ($id) {
        return view('recipe.review', ['id' => $id]);
    }

    public function review(Request $request, $id)
    {
        $review = Review::create([
            'recipe_id' => $id,
            'comments' => $request->comment,
            'star_rating' => $request->rating
        ]);

        return redirect("/recipes/$id");

    }
}
