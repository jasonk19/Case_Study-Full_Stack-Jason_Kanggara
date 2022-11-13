@extends('layouts.layout')

@section('content')
  <div class="d-flex flex-column justify-content-center align-items-center vh-100 gap-3">
    <h1>Home</h1>
    <div class="d-flex gap-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Categories</h5>
          <h6 class="card-subtitle mb-2 text-muted">Kumpulan categories</h6>
          <a href="/categories" class="card-link">Open Categories</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Products</h5>
          <h6 class="card-subtitle mb-2 text-muted">Kumpulan products</h6>
          <a href="/products" class="card-link">Open Products</a>
        </div>
      </div>
    </div>
  </div>
@endsection