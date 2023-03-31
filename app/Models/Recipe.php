<?php

namespace App\Models;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Maize\Markable\Markable;
use Maize\Markable\Models\Favorite;

class Recipe extends Model
{
    use HasFactory, Markable;

    protected $fillable = ['name', 'desc', 'image'];

    public function getIngredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients', 'recipe_id', 'ingredient_id')->withPivot('quantity', 'unit', 'additionalInfo');
    }

    public function getSteps()
    {
        return $this->hasMany(Step::class, 'recipe_id');
    }

    protected $fillable = [
        'name',
        'desc',
        'image',
    ];

    protected static $marks = [
        Favorite::class,
    ];
}
