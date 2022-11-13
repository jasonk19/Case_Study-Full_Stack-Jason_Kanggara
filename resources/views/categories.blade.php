@extends('layouts.layout')

@section('content')
  <div class="py-3">
    
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="categories">Categories</li>
      </ol>
    </nav>
    <h1>Categories</h1>
  
    <div class="d-flex gap-3 flex-wrap mt-4">
      @foreach($categories as $category)
      <div class="card" style="width: 18rem;">
        <img src="{{$category->path}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$category->category_name}}</h5>
          <a href="/categories/{{$category->category_slug}}" class="btn btn-primary">View Detail</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection