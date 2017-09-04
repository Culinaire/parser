<ul>
  @foreach ($recipes as $r)
    <li><a href="#">{{ $r->name(false) }}</a></li>
  @endforeach
</ul>
