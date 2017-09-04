@extends('layouts.master')

@section('content')

  <h1>Recipes</h1>

  @include('recipes.list', ['recipes'=> $recipes])

@endsection
