@extends('layouts.app')

@section('title', 'Shop - Fortelle')

@section('content')
<div class="container">
    <div class="page-hero mb-5">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">SHOP OUR COLLECTION</h1>
            <p class="lead">Discover our carefully curated selection of premium fashion items</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-3">
            <!-- Filters Sidebar -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Categories</h5>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="{{ route('shop') }}?category=all" class="list-group-item list-group-item-action border-0 {{ request('category') == 'all' ? 'active' : '' }}">All Products</a>
                        <a href="{{ route('shop') }}?category=womens" class="list-group-item list-group-item-action border-0 {{ request('category') == 'womens' ? 'active' : '' }}">Women's Clothing</a>
                        <a href="{{ route('shop') }}?category=mens" class="list-group-item list-group-item-action border-0 {{ request('category') == 'mens' ? 'active' : '' }}">Men's Clothing</a>
                        <a href="{{ route('shop') }}?category=accessories" class="list-group-item list-group-item-action border-0 {{ request('category') == 'accessories' ? 'active' : '' }}">Accessories</a>
                        <a href="{{ route('shop') }}?category=shoes" class="list-group-item list-group-item-action border-0 {{ request('category') == 'shoes' ? 'active' : '' }}">Shoes</a>
                        <a href="{{ route('shop') }}?category=bags" class="list-group-item list-group-item-action border-0 {{ request('category') == 'bags' ? 'active' : '' }}">Bags</a>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Filter by Price</h5>
                </div>
                <div class="card-body">
                    <input type="range" class="form-range" min="0" max="1000" step="10" id="priceRange">
                    <div class="d-flex justify-content-between">
                        <span>$0</span>
                        <span>$1000</span>
                    </div>
                    <button class="btn btn-primary w-100 mt-3">Apply Filter</button>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <!-- Products Grid -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="mb-0">Showing {{ $products->firstItem() }} - {{ $products->lastItem() }} of {{ $products->total() }} products</p>
                <div>
                    <select class="form-select w-auto d-inline-block">
                        <option>Sort by: Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest First</option>
                    </select>
                </div>
            </div>

            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="product-card card">
                        <div class="position-relative">
                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                            @if($product->is_new)
                            <span class="badge-sale">New</span>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 80) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">${{ number_format($product->price, 2) }}</span>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection