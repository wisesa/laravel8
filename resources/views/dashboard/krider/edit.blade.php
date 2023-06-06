@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Krider</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/krider/update/{{ $krider->slug }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
        name="name" required autofocus value="{{ old('name', $krider->name) }}">
        @error('name') 
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
         name="slug" required autofocus value="{{ old('slug', $krider->slug) }}">
        @error('slug') 
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        @if($krider->image)
            <img src="{{ asset('storage/' . $krider->image) }}" class="img-preview img-fluid mb-3 d-block col-sm-5" />
        @else
            <img class="img-preview img-fluid" />
        @endif
        <input class="form-control @error('image') is-invalid @enderror" onchange="previewImage()" type="file" id="image" name="image">
        @error('image') 
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Description</label>
        @error('description')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <input id="description" type="hidden" name="description" value="{{ old('description', $krider->description) }}">
        <trix-editor input="description"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function(){
        fetch('/dashboard/krider/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage(){
        const image=document.querySelector('#image');
        const imgPreview=document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);
        ofReader.onload = function(ofREvent){
            imgPreview.src = ofREvent.target.result;
        }
    }
</script>
@endsection