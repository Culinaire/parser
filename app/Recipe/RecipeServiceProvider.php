<?php

namespace App\Recipe;
use Illuminate\Support\ServiceProvider;

class RecipeServiceProvider extends ServiceProvider
{
  public function boot()
  {
    // Views
    $this->loadViewsFrom(resource_path('views/recipes'), 'recipe');
  }
}
