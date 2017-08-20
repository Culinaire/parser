@extends('master')

@section('content')
  {!! dump($recipes) !!}
  @foreach ($recipes as $r)
    <div id="{{ str_slug($r->name(false)) }}" class="recipe">
      {!! $r->name() !!}
      {!! $r->ingredients() !!}
      {!! $r->procedures() !!}
      {!! $r->quality() !!}
    </div>
  @endforeach
@endsection
