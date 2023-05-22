@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    
    <?php 
        echo "<pre>";
        print_r($posts);
        echo "</pre>"; ?>

    @foreach($posts as $category)
    <ul class="mb-5">
        <li>
            <h2>
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </h2>
        </li>
    </ul>
    @endforeach
@endsection

