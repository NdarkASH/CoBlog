
@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>My Category</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-primary col-lg-6" role="alert">
  {{ session('success') }}
</div>
@endif
@if(session()->has('delete'))
<div class="alert alert-danger col-lg-6" role="alert">
  {{ session('delete') }}
</div>
@endif
<div class="table-responsive col-lg-6">
    <table class="table table-sm">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td class="d-flex">
                <form action="/dashboard/categories/{{ $category->slug }}/edit" method="get" >
                    <button class="btn btn-success btn-sm mx-1" style="--bs-btn-padding-y: .100rem; --bs-btn-padding-x: .3rem; --bs-btn-font-size: .50rem;">
                        <i data-feather="edit"></i>
                    </button>
                </form>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post">
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
