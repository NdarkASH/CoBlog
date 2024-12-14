
{{-- @dd($posts) --}}

@extends('layouts.main')


@section('container')
<div class="justify-content-center">

    <div class="col-20">
        <h1 class="text-center"> All {{ $title }}</h1>
    </div>


@if ($posts->count())
<div class="card mb-3 text-center">
    @if ($posts[0]->image)
    <div style="height:auto; max-height:300px; overflow:hidden;">
    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->image }}">
    </div>
    @else
    <img src="https://picsum.photos/500/100?search={{ $posts[0]->category->name }}" class="card-img-top" alt="test">

    @endif
    <div class="card-body mb-3">
      <h5 class="card-title fs-1">{{ $posts[0]->title }}</h5>
      <small class="text-muted">
        <p>Penulis: <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> di <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></p>
      </small>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <p class="card-text"><small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
      <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-outline-primary">Read more...</a>
    </div>
</div>

<div class="row">
@foreach ($posts->skip(1) as $post)
<article class="col-md-4">
    <div class="card mb-3">
        @if ($post->image)
        <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->image }}">
        </div>
        @else
        <img src="https://picsum.photos/200/200?search={{ $post->category->name }}" class="card-img-top" alt="test">

        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <small class="text-muted">
            <p>Penulis: <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> di <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
          </small>
          <p class="card-text">{{ $post->excerpt }}</p>
          <p class="card-text"><small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small></p>
          <a href="/blog/{{ $post->slug }}" class="text-decoration-none btn btn-outline-primary">Read more...</a>
        </div>
    </div>
</article>
@endforeach
@else
    <p class="text-center fs-4">No Post Found.</p>
@endif
<div class="d-flex justify-content-center mt-5">
    {{ $posts->links() }}
</div>

</div>
@endsection
