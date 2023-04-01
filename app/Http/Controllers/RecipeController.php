<?php

namespace App\Http\Controllers;

use App\Models\Step;
use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RecipeController extends Controller
{

    public function index()
    {
        $recipes = Recipe::paginate(9);
        return view('recipe.index', ['recipes' => $recipes]);
    }

    public function show($id)
    {
        $recipe = Recipe::find($id);
        return view('recipe.show', ['recipe' => $recipe]);
    }

    public function adminIndex()
    {
        $recipes = Recipe::orderBy('id', 'asc')->get();
        return view('recipe.admin', ['recipes' => $recipes]);
    }
    public function showStore()
    {
        // $this->authorize('create', Recipe::class);
        if (Gate::denies('isAdmin')) {
            session()->flash('msg', 'You are unauthorized');
            return redirect()->route('home');
        }
        return view('recipe.create');
    }

    public function store(Request $req)
    {

        $req->validate([
            'name' => 'required|max:50|string',
            'desc' => 'required',
            'image' => 'required',
            'steps' => 'array',
            'steps.*' => 'required|string',
            'ingredients' => 'required|array',
            'ingredients.*' => 'required|string|max:100',
            'unit' => 'array',
            'unit.*' => 'required|string',
            'quantity' => 'array',
            'quantity.*' => 'required|string',
            'additionalInfo' => 'array',
        ]);

        $recipe = Recipe::create(
            [
                'name' => $req->name,
                'desc' => $req->desc,
                'image' => $req->image,
            ]

        );

        $units = $req->unit;
        $quantity = $req->quantity;
        $additionalInfo = $req->additionalInfo;

        foreach ($req->ingredients as $index => $ingredient) {

            $exist = Ingredient::where('name', $ingredient)->first();

            if (!$exist) {
                $newIng = Ingredient::create([
                    'name' => $ingredient,
                ]);

                $recipe->getIngredients()->attach($newIng->id, [
                    'unit' => $units[$index],
                    'quantity' => $quantity[$index],
                    'additionalInfo' => $additionalInfo[$index],
                ]);
            } else {
                $recipe->getIngredients()->attach($exist->id, [
                    'unit' => $units[$index],
                    'quantity' => $quantity[$index],
                    'additionalInfo' => $additionalInfo[$index],
                ]);
            }
        }

        foreach ($req->steps as $index => $step) {
            Step::create([
                'recipe_id' => $recipe->id,
                'steps_num' => $index + 1,
                'steps_desc' => $step,
            ]);
        }

        session()->flash('msg', 'Added Successfully');
        return redirect('/home');
    }

    public function edit()
    {
        return view('recipe.edit');
    }

    public function destroy()
    {
        return view('recipe.delete');
    }

    public function recipes()
    {
        $recipes = Recipe::all();
        return view('recipe.recipes', ['recipes' => $recipes]);
    }

    public function filter(Request $request)
    {
        $filter = $request->get('filter');

        switch ($filter) {
            case 'latest':
                $recipes = Recipe::latest()->paginate(10);
                break;
            case 'favorite':
                $recipes = Recipe::orderBy('favorites', 'desc')->paginate(10);
                break;
            case 'random':
                $recipes = Recipe::inRandomOrder()->paginate(10);
                break;
            default:
                $recipes = Recipe::paginate(10);
                break;
        }

        return view('recipe.index', ['recipes' => $recipes]);
    }

// public function recommendations()
// {
//     $recommendedWords = ['dinner', 'lunch', 'vegetarian', 'desserts'];
//     return view('recommendations', ('recommendedWords'));
// }
}