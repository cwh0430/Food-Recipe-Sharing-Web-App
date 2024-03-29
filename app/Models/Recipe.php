<?php

namespace App\Models;

use App\Models\Ingredient;
use Maize\Markable\Markable;
use Maize\Markable\Models\Favorite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory, Markable;

    protected $fillable = ['name', 'desc', 'image'];


    //many to many relationship
    public function getIngredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients', 'recipe_id', 'ingredient_id')->withPivot('quantity', 'unit', 'additionalInfo');
    }

    protected static function booted()
    {
        static::deleting(function ($recipe) {
            $recipe->getIngredients()->detach();
            $recipe->getSteps()->delete();
        });
    }

    //one to many relationship
    public function getSteps()
    {
        return $this->hasMany(Step::class, 'recipe_id');
    }
    
    public function getReviews()
    {
        return $this->hasMany(Review::class, 'recipe_id');
    }


    protected static $marks = [
        Favorite::class,
    ];
}
