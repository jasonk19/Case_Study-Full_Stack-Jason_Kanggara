@extends('layouts.layout')

@section('content')
  <div class="py-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/products">Products</a></li>
        <li class="breadcrumb-item active" aria-current="{{$product[0]->product_name}}">{{$product[0]->product_name}}</li>
      </ol>
    </nav>
    <div class="d-flex justify-content-between">
      <div>
        <h1>{{$product[0]->product_name}}</h1>
        <p>{{$product[0]->description}}</p>
      </div>
      <h3>Rp{{$product[0]->price}}</h3>
    </div>
    <div id="productImages" class="carousel carousel-dark slide w-50" data-bs-ride="carousel">
      <div class="carousel-inner">
      @foreach($product as $p)
        <div class="carousel-item {{$loop->index === 0 ? 'active' : ''}}">
          <img src="{{$p->path}}" class="d-block w-100" alt="{{$p->product_name}}">
        </div>
      @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#productImages" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#productImages" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
@endsection