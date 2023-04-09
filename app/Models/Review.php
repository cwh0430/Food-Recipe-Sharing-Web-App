<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;
use App\Models\User;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['recipe_id', 'comments', 'star_rating'];

    public function getRecipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }

}
