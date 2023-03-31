<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $fillable = ['recipe_id', 'steps_num', 'steps_desc'];
    public function getRecipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }
}