<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function getIngredients()
    {
        return $this->hasMany(Ingredient::class, 'recipe_id');
    }

    public function getSteps()
    {
        return $this->hasMany(Step::class, 'recipe_id');
    }
}