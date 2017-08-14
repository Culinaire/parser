<?php

namespace App\Recipe;

use App\Recipe\BaseModel as Model;
use Illuminate\Support\Facades\View;

class RecipeModel extends Model
{
  public function name($display = true)
  {
    $name = $this->get('name');
    return $this->display('name', compact(['display', 'name']), $display);
  }

  public function yield($display = true)
  {
    $meta = $this->get('meta');

    $qty = $meta['yield']['qty'];
    $uom = $meta['yield']['uom'];

    return $this->display('yield', compact(['qty', 'uom']), $display);
  }

  public function preptime($display = true)
  {
    $meta = $this->get('meta');

    $active = $meta['prep_time']['active'];
    $inactive = $meta['prep_time']['inactive'];

    return $this->display('preptime', compact(['active', 'inactive']), $display);
  }

  public function category($display = true)
  {
    $meta = $this->get('meta');
    $category = $meta['category'];

    return $this->display('category', compact(['category']), $display);
  }

  public function ingredients($display = true)
  {
    $ingredients = $this->get('ingredients');
    return $this->display('ingredients', compact(['ingredients']), $display);
  }

  public function procedures($display = true)
  {
    $procedures = $this->get('procedures');
    return $this->display('procedures', compact(['procedures']), $display);
  }

  public function quality($display = true)
  {
    $qualities = $this->get('quality');
    return $this->display('qualities', compact(['qualities']), $display);
  }

  public function display($view, $data = [], $show = true)
  {
    $values = (array) $data;
    if($show == false) {
      return implode($data);
    }
    return view('recipe::'.$view, $values);
  }
}
