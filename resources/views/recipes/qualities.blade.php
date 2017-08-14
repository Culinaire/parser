@if (!empty($qualities))

<div class="recipe-section">
  <h2 class="section-title">Quality Identifiers</h2>

  <ul class="quality">

  @foreach ($qualities as $quality)

    <li>@include('recipe::quality', compact(['quality']))</li>

  @endforeach

</ul>
</div>

@endif
