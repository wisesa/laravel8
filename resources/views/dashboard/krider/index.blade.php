@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Kriders</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">
  <a href="/dashboard/krider/create" class="btn btn-primary mb-3">Create new kriders</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kriders as $krider)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $krider->title }}</td>
        <td>{{ $krider->category->name }}</td>
        <td>
          <a href="/dashboard/kriders/{{ $krider->slug }}" class="badge bg-info">View</a>
          <a href="/dashboard/kriders/{{ $krider->slug }}/edit" class="badge bg-warning">Edit</a>

          <form action="/dashboard/kriders/{{ $krider->slug }}" method="krider" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?');">
              Delete
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection