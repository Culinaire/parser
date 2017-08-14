@if (!empty($procedures))

<div class="recipe-section">
  <h2 class="section-title">Procedures</h2>

  <ol class="procedures">

  @foreach ($procedures as $step)

    <li>@include('recipe::step', compact(['step']))</li>

  @endforeach

</ol>
</div>

@endif
