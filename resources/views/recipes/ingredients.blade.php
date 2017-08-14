@if (!empty($ingredients))

<div class="recipe-section">
  <h2 class="section-title">Ingredients</h2>

  <ul class="ingredients">

  @foreach ($ingredients as $ing)

    <li>@include('recipe::ing', $ing)</li>

  @endforeach

  </ul>
</div>

@endif
