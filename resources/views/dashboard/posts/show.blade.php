
@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-8">
            <h1 class="text-center">{{ $post->title }}</h1>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" style="max-height: 350px;" class="card-img-top" alt="{{ $post->image }}" width="500px" height="200px">
            @else
            <img src="https://picsum.photos/500/200?search={{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
            <p class="fs-6 mb-5">Post for <b>{{ $post->created_at->diffForHumans() }}</b> in <b>{{ $post->category->name }}</b></p>
            {!! $post->body !!}
            <form action="/dashboard/posts" method="get">
            <button type="submit" class="btn btn-primary my-3">Back to my posts</button>
            </form>

        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

@endsection

