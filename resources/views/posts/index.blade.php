@extends('layouts.app')

@section('content')

  <h1>Blog</h1>
  {{-- maybe, sometimes we can create search or anything else in here --}}

  @include ('posts/_list')
@endsection
