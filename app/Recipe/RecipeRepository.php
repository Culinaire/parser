<?php

namespace App\Recipe;

use App\Recipe\RecipeFactory as Factory;
use Illuminate\Support\Facades\Storage;

class RecipeRepository
{
  /**
   * Storage Instance.
   */
  protected $disk;

  /**
   * Paths to recipe files.
   */
  protected $paths = [];

  /**
   * Collection of Recipes.
   */
  protected $recipes;

  public function __construct()
  {
    $disk = Storage::disk('recipes');

    $this->disk = $disk;

    $this->paths = $disk->directories();

    $this->recipes = $this->load();

    return $this;
  }

  public function load()
  {
    return Factory::loadFromDir($this->paths);
  }

  public function all()
  {
    return $this->recipes;
  }

  public function byType($type)
  {
    if (array_key_exists($type, $this->recipes)) {
      return $this->recipes[$type];
    }
    return null;
  }
}
