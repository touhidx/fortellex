@extends('frontend.layouts.app')

@section('title', 'Hot Deals - Fortelle')

@section('content')
<div class="container hot-deals-page">
    <div class="page-hero mb-5">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">HOT DEALS</h1>
            <p class="lead">Limited time offers on our most popular items</p>
        </div>
    </div>

   <div class="row">

                    <div class="col-md-3 mb-4">
                        <x-product-cart badge="Hi" />
                    </div>
                    <div class="col-md-3 mb-4">
                        <x-product-cart badge="Hi" />
                    </div>
                    <div class="col-md-3 mb-4">
                        <x-product-cart badge="Hi" />
                    </div>
                    <div class="col-md-3 mb-4">
                        <x-product-cart badge="Hi" />
                    </div>

                </div>


</div>
@endsection