<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Recipe\RecipeRepository as Recipes;

class PageController extends Controller
{
  public function recipes()
  {
    $recipes = new Recipes();
    $rec = array_collapse($recipes->all());
    return view('pages.recipes')->with('recipes', $rec);
  }
}
