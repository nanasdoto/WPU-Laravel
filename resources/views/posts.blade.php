@extends('layouts.main')
@section('container')

  @foreach($posts as $post)
  <article class="mt-3">
  <h2>
    <a href="/posts/{{ $post["slug"] }}">{{ $post["tittle"] }}</a>
  </h2>
  <h5>By : {{ $post["author"] }}</h5>
  <p>{{ $post["body"] }}</p>
  @endforeach
  </article>

@endsection