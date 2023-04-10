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

        // Fetch recommended recipes
        $recommendedRecipes = $this->getRecommendedRecipes($id);

        return view('recipe.show', [
            'recipe' => $recipe,
            'recommendedRecipes' => $recommendedRecipes,
        ]);
    }

    public function adminIndex()
    {
        $recipes = Recipe::orderBy('id', 'asc')->paginate(20);
        return view('recipe.admin', ['recipes' => $recipes]);
    }
    public function showStore()
    {
        return view('recipe.create');
    }

    public function store(Request $req)
    {
        $this->authorize('create', Recipe::class);


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

        session()->flash('success', 'Added Successfully');
        return redirect('/manage');
    }

    public function showEdit($id)
    {
        $recipe = Recipe::find($id);
        return view('recipe.edit', ['recipe' => $recipe]);
    }

    public function edit(Request $req, $id)
    {
        $this->authorize('update', Recipe::class);

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

        $recipe = Recipe::find($id);

        $recipe->update([
            'name' => $req->name,
            'desc' => $req->desc,
            'image' => $req->image,
        ]);

        $recipe->getIngredients()->sync([]);
        foreach ($req->ingredients as $index => $ingredient) {
            $exist = Ingredient::where('name', $ingredient)->first();
            if (!$exist) {
                $newIng = Ingredient::create(['name' => $ingredient]);
                $recipe->getIngredients()->attach($newIng->id, [
                    'unit' => $req->unit[$index],
                    'quantity' => $req->quantity[$index],
                    'additionalInfo' => $req->additionalInfo[$index],
                ]);
            } else {
                $recipe->getIngredients()->attach($exist->id, [
                    'unit' => $req->unit[$index],
                    'quantity' => $req->quantity[$index],
                    'additionalInfo' => $req->additionalInfo[$index],
                ]);
            }
        }

        $recipe->getSteps()->delete();
        foreach ($req->steps as $index => $step) {
            Step::create([
                'recipe_id' => $recipe->id,
                'steps_num' => $index + 1,
                'steps_desc' => $step,
            ]);
        }

        session()->flash('success', 'Updated Successfully');
        return redirect('/manage');



    }

    public function destroy($id)
    {
        $this->authorize('delete', Recipe::class);

        $recipe = Recipe::find($id);
        $recipe->delete();

        session()->flash('success', 'Deleted Successfully');
        return redirect('/manage');
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


    public function getRecommendedRecipes($id)
    {
        // Fetch recommended recipes
        $recommendedRecipes = Recipe::where('id', '!=', $id)->inRandomOrder()->limit(3)->get();

        return $recommendedRecipes;
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $recipes = Recipe::where('name', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('recipe.index', ['recipes' => $recipes]);
    }
    
}