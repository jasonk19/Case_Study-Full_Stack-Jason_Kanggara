@extends('layouts.layout')

@section('content')
  <div class="py-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        <li class="breadcrumb-item active" aria-current="{{$category->category_name}}">{{$category->category_name}}</li>
      </ol>
    </nav>
    <h1>{{$category->category_name}}</h1>
    <img src="{{$category->path}}" class="w-50 mx-auto" alt="$category->category_name">
  </div>
@endsection