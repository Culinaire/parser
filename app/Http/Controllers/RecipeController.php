<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Recipe\RecipeRepository as Recipes;

class RecipeController extends Controller
{
  protected $recipes;

  public function __construct()
  {
    $this->recipes = new Recipes();
  }

  public function index()
  {
    $recipes = $this->recipes;
    dump($recipes);
  }

  public function type($type)
  {
    $recipes = $this->recipes->byType($type);
    dump($recipes);
  }
}
