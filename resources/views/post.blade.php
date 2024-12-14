{{-- @dd($posts); --}}
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $post->title }}</h1>
            <p>Penulis: {{ $post->author->name }} di <a href="/categories/{{ $post->category->name }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            {!! $post->body !!}
            <br><a href="/blog/" class="text-decoration-none btn-outline-primary">back to home</a>
        </div>
    </div>
</div>
<article class="mb-5">

</article>
@endsection

{{-- @section('container') --}}
{{--
@foreach ($post as $p)
<article>
    <h2>{{ $p["title"] }}</h2>
</article>



@endsection --}}
