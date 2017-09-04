<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe\RecipeRepository as Recipes;

class PageController extends Controller
{
  // Welcome Page
  public function welcome()
  {
    return view('pages.welcome');
  }
  // Recipes Page
  public function recipes()
  {
    $recipes = new Recipes;
    $recipes = array_collapse($recipes->all());
    return view('pages.recipes')->with('recipes', $recipes);
  }
}
