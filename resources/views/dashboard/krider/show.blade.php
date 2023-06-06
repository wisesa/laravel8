@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $krider->name }}</h1>

                <a href="/dashboard/krider" class="btn btn-success">Back to All Kamen Rider</a>
                <a href="/dashboard/krider/edit/{{ $krider->slug }}" class="btn btn-warning">Edit</a>
                
                @if ($krider->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $krider->image) }}" class="img-fluid mt-3" alt="{{ $krider->name }}">
                    </div>    
                @else
                    <img src="https:/source.unsplash.com/1200x400?{{ $krider->category->name }}" class="img-fluid mt-3" alt="{{ $krider->category->name }}">
                @endif

                <article class="my-3 fs-5">
                    {!! $krider->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection