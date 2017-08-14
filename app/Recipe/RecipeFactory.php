<?php

namespace App\Recipe;

use App\Recipe\RecipeModel as Model;
use Storage;
use Symfony\Component\Yaml\Yaml;

class RecipeFactory
{
    public static function load($arr)
    {
      $recipe = new Model($arr);
      return $recipe;
    }

    public static function loadFromFile($path)
    {
      $files = Storage::disk('recipes')->files($path);

      $content = [];

      foreach($files as $file) {

        $data = Storage::disk('recipes')->get($file);
        $yaml = Yaml::parse($data);
        $content[] = static::load($yaml);
      }


      return $content;
    }

    public static function loadFromDir($paths = [])
    {
      $files = [];

      foreach($paths as $path) {
        $files[] = static::loadFromFile($path);
        $folder = array_collapse($files);
        $collections[$path] = collect($folder);
      }

      return $collections;
    }
}
