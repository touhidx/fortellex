<section class="{{ $sectionClass }}">
    <div class="container">
        <div class="section-title">
            <h2>{{ $title }}</h2>
        </div>

        <div class="product-carousel">
            <div class="glide {{ $carouselClass }}">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @foreach($products as $product)
                        <li class="glide__slide">
                            @include('frontend.components.product-cart', $product)
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Product Carousel Sections */
    .new-arrivals, .trending {
        padding: var(--section-padding);
    }

    .new-arrivals {
        background-color: #f9f9f9;
    }

    .product-carousel {
        position: relative;
    }

    .glide__arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: var(--white);
        border: none;
        width: 40px;
        height: 40px;
        border-radius: var(--border-radius-circle);
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        transition: var(--transition);
        z-index: var(--z-low);
        color: var(--dark-color);
    }

    .glide__arrow--left {
        left: -20px;
    }

    .glide__arrow--right {
        right: -20px;
    }

    /* Responsive Product Carousel */
    @media (max-width: 768px) {
        .glide__arrow {
            width: 35px;
            height: 35px;
        }
        
        .glide__arrow--left {
            left: -10px;
        }
        
        .glide__arrow--right {
            right: -10px;
        }
    }

    @media (max-width: 576px) {
        .glide__arrow {
            width: 30px;
            height: 30px;
        }
        
        .glide__arrow--left {
            left: -5px;
        }
        
        .glide__arrow--right {
            right: -5px;
        }
    }
</style>

<script>
    // Initialize Product Carousels
    document.addEventListener('DOMContentLoaded', function() {
        // New Arrivals Carousel
        const newArrivalsCarousel = document.querySelector('.new-arrivals-carousel');
        if (newArrivalsCarousel) {
            new Glide('.new-arrivals-carousel', {
                type: 'carousel',
                autoplay: 4000,
                animationDuration: 600,
                hoverpause: true,
                perView: 4,
                gap: 30,
                breakpoints: {
                    1200: {
                        perView: 3
                    },
                    992: {
                        perView: 2
                    },
                    576: {
                        perView: 1
                    }
                }
            }).mount();
        }

        // Trending Carousel
        const trendingCarousel = document.querySelector('.trending-carousel');
        if (trendingCarousel) {
            new Glide('.trending-carousel', {
                type: 'carousel',
                autoplay: 4500,
                animationDuration: 600,
                hoverpause: true,
                perView: 4,
                gap: 30,
                breakpoints: {
                    1200: {
                        perView: 3
                    },
                    992: {
                        perView: 2
                    },
                    576: {
                        perView: 1
                    }
                }
            }).mount();
        }
    });
</script>