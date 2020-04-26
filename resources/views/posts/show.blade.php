@extends('layouts.app')

@section('content')
<div class="bg-white p-3 post-card">

    <h1>{{ $show->title }}</h1>

    <div class="mb-3">
        <small class="text-muted">{{ $show->user->email }} || {{ $show->user->name }}</small><br>
    </div>

    <div v-pre class="post-content">
        {!! $show->content !!}
    </div>

    <p class="mt-3">
        @include ('comments/_list')
    </p>
</div>

@endsection
