<div id="{{ str_slug($recipe->name(false)) }}" class="recipe">

  {!! $recipe->name() !!}
  {!! $recipe->ingredients() !!}
  {!! $recipe->procedures() !!}
  {!! $recipe->quality() !!}
</div>
