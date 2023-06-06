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
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kriders as $krider)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $krider->name }}</td>
        <td><img src="{{ asset('storage/' . $krider->image) }}" style="width:100px;" class="img-fluid mt-3" /></td>
        <td>
          <a href="/dashboard/krider/{{ $krider->slug }}" class="badge bg-info">View</a>
          <a href="/dashboard/krider/edit/{{ $krider->slug }}" class="badge bg-warning">Edit</a>
          <a href="/dashboard/krider/destroy/{{ $krider->slug }}" class="badge bg-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection