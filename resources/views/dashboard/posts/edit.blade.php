
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div>
  <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}" autofocus>
      @error('title')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
      <input class="form-control" id="slug" type="text" name="slug" placeholder="fill automatic" readonly value="{{ old('slug', $post->slug) }}">
      @error('slug')
      <p class="text-danger fs-10">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select form-select-sm" name="category_id" aria-label="Small select example">
            <option selected disabled value="0">Select the category</option>
            @foreach ($categories as $category)
                @if (old('category_id', $post->category_id) == $category->id)
                    <option value={{ $category->id }} selected>{{ $category->name }}</option>
                @else
                    <option value={{ $category->id }}>{{ $category->name }}</option>
                @endif
            @endforeach
      </select>
      @error('category_id')
      <p class="text-danger fs-10">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label @error('image') is-invalid @enderror">Upload Image</label>
        <input class="form-control" type="file" id="image" name="image" accept="image/*" onchange="loadFile(event)"/>
        <input type="hidden" name="oldImage" value="{{ $post->image }}">
        @error('image')
            <p class="text-danger fs-10">{{ $message }}</p>
        @enderror
        @if($post->image)
            <img id="output" class="rounded d-block mt-2" src="{{ asset('storage/' . $post->image) }}" width="500px" height="200px">
        @else
            <img id="output" class="rounded d-block mt-2" width="500px" height="200px">
        @endif
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}" required>
        <trix-editor input="body"></trix-editor>
        @error('body')
        <p class="text-danger fs-10">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-lg col-2 mx-auto d-md-flex"><i data-feather="edit" class="ms"></i>Edit Post</button>
  </form>
    <form action="/dashboard/posts" method="get">
        <button type="submit" class="btn btn-danger my-2 btn-lg col-2 mx-auto d-md-flex"><i data-feather="trash-2" class="ms"></i>Cancel</button>
    </form>

  <script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/css/style.css">
<script>
    const loadFile = function(event) {
        const output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectUrl(output.src)
        }
    }
</script>
@endsection




