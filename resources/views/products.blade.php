@extends('layouts.layout')

@section('content')
  <div class="py-3">
    
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="products">Products</li>
      </ol>
    </nav>
    <h1>Products</h1>
  
    <div class="d-flex gap-3 flex-wrap mt-4">
      @foreach($products as $product)
      <div class="card" style="width: 18rem;">
        <img src="{{$product->path}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$product->product_name}}</h5>
          <p>{{$product->description}}</p>
          <h6>Rp{{$product->price}}</h6>
          <a href="/products/{{$product->product_slug}}" class="btn btn-primary">View Detail</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection