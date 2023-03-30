<?php

namespace App\Models;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;

    public function getIngredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients', 'recipe_id', 'ingredient_id')->withPivot('quantity', 'unit', 'additionalInfo');
    }

    public function getSteps()
    {
        return $this->hasMany(Step::class, 'recipe_id');
    }
}