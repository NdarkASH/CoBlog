
@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>My Posts</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-primary col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
@if(session()->has('delete'))
<div class="alert alert-danger col-lg-10" role="alert">
  {{ session('delete') }}
</div>
@endif
<div class="table-responsive col-lg-10">
    <table class="table table-sm">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create Post</a>
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td class="d-flex">
                <form action="/dashboard/posts/{{ $post->slug }}" method="get">
                    <button class="btn btn-primary btn-sm"
                    style="--bs-btn-padding-y: .100rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .50rem;">
                    <i data-feather="database"></i>
                    </button>
                </form>
                <form action="/dashboard/posts/{{ $post->slug }}/edit" method="get" >
                    <button class="btn btn-success btn-sm mx-1" style="--bs-btn-padding-y: .100rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .50rem;">
                        <i data-feather="edit"></i>
                    </button>
                </form>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('Are you sure')" class="btn btn-danger btn-sm"  style="--bs-btn-padding-y: .100rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .50rem;">
                    <i data-feather="trash-2"></i>
                    </button>
                </form>
                </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>
<script></script>

@endsection
