@extends('frontend.layouts.app')


@section('content')
    <!-- Hero Carousel Component -->
    @include('frontend.components.hero-carousel', [
        'heroSlides' => [
            [
                'image' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'alt' => 'Summer Collection',
                'title' => 'Summer Collection',
                'description' => 'Discover the latest trends',
                'link' => '/shop/summer',
                'button_text' => 'Shop Now'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'alt' => 'Elegant Styles',
                'title' => 'Elegant Styles',
                'description' => 'Premium quality fabrics',
                'link' => '/shop/premium',
                'button_text' => 'View Collection'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1542272604-787c3835535d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
                'alt' => 'New Arrivals',
                'title' => 'New Arrivals',
                'description' => 'Fresh styles for the season',
                'link' => '/shop/new-arrivals',
                'button_text' => 'Explore'
            ]
        ]
    ])

    <!-- Featured Categories Component -->
    @include('frontend.components.featured-categories', [
        'categories' => [
            [
                'image' => 'https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Women\'s Collection',
                'link' => '/shop/women'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1520367445093-50dc08a59d9d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Men\'s Collection',
                'link' => '/shop/men'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1556905055-8f358a7a47b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Accessories',
                'link' => '/shop/accessories'
            ]
        ]
    ])

    <!-- New Arrivals Component -->
    @include('frontend.components.product-carousel', [
        'sectionClass' => 'new-arrivals',
        'carouselClass' => 'new-arrivals-carousel',
        'title' => 'New Arrivals',
        'products' => [
            [
                'image' => 'https://images.unsplash.com/photo-1594223274512-ad4803739b7c?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Floral Summer Dress',
                'price' => '89.99',
                'badge' => 'New'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Linen Blazer',
                'price' => '129.99',
                'badge' => 'New'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1582142306909-195724d1a6ee?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Silk Evening Gown',
                'price' => '199.99',
                'badge' => 'New'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1582418702059-97ebafb35d09?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Casual Summer Set',
                'price' => '79.99',
                'badge' => 'New'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1585487000113-6e5f4bc9a4f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Elegant Maxi Dress',
                'price' => '149.99',
                'badge' => 'New'
            ]
        ]
    ])

    <!-- Trending Component -->
    @include('frontend.components.product-carousel', [
        'sectionClass' => 'trending',
        'carouselClass' => 'trending-carousel',
        'title' => 'Trending Now',
        'products' => [
            [
                'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Classic White Shirt',
                'price' => '59.99',
                'badge' => 'Trending'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1582418702059-97ebafb35d09?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Denim Jacket',
                'price' => '89.99',
                'badge' => 'Trending'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Leather Handbag',
                'price' => '159.99',
                'badge' => 'Trending'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1582142306909-195724d1a6ee?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Wide Leg Trousers',
                'price' => '79.99',
                'badge' => 'Trending'
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1585487000113-6e5f4bc9a4f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
                'name' => 'Knit Sweater',
                'price' => '69.99',
                'badge' => 'Trending'
            ]
        ]
    ])
@endsection