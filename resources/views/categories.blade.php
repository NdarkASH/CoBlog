
{{-- @dd($categories) --}}

@extends('layouts.main')

@section('container')
<h1>Post Categories</h1>
<div class="row">
@foreach ($categories as $category)


<article class="col-md-4">
    <div class="card mb-3">
        <img src="https://picsum.photos/200/200?search={{ $category->name }}" class="card-img-top" alt="test">
        <div class="card-body">
          <a href="/blog?category={{ $category->name }}"><h5 class="card-title">{{ $category->name }}</h5></a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptate, tempora quidem temporibus dolorem eveniet aliquam. Earum eaque ut deserunt.</p>
        </div>
    </div>
</article>
@endforeach
</div>

@endsection
