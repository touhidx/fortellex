<section class="hero-carousel">
    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                @foreach($heroSlides as $slide)
                <li class="glide__slide carousel-slide">
                    <img src="{{ $slide['image'] }}" alt="{{ $slide['alt'] }}" class="carousel-image">
                    <div class="carousel-overlay"></div>
                    <div class="carousel-content">
                        <h2>{{ $slide['title'] }}</h2>
                        <p>{{ $slide['description'] }}</p>
                        <a href="{{ $slide['link'] }}" class="btn btn-primary">{{ $slide['button_text'] }}</a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
            @foreach($heroSlides as $index => $slide)
            <button class="glide__bullet" data-glide-dir="={{ $index }}"></button>
            @endforeach
        </div>
    </div>
</section>

<style>
    /* Hero Carousel Styles */
    .hero-carousel {
        position: relative;
        height: 90vh;
        max-height: 800px;
        overflow: hidden;
        margin-top: 76px; /* Account for fixed navbar */
    }

    .carousel-slide {
        position: relative;
        height: 100%;
        width: 100%;
    }

    .carousel-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .carousel-content {
        position: absolute;
        top: 50%;
        left: 10%;
        transform: translateY(-50%);
        max-width: 500px;
        color: var(--white);
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        z-index: var(--z-medium);
    }

    .carousel-content h2 {
        font-size: 3.5rem;
        font-weight: 900;
        margin-bottom: 1rem;
        line-height: 1.2;
        opacity: 0;
        transform: translateY(20px);
        transition: var(--transition-slow);
    }

    .carousel-content p {
        font-size: 1.2rem;
        margin-bottom: 2rem;
        opacity: 0;
        transform: translateY(20px);
        transition: var(--transition-slow) 0.2s;
    }

    .carousel-content .btn {
        opacity: 0;
        transform: translateY(0px);
        transition: var(--transition-slow) 0.4s;
    }

    .glide__slide--active .carousel-content h2,
    .glide__slide--active .carousel-content p,
    .glide__slide--active .carousel-content .btn {
        opacity: 1;
        transform: translateY(0);
    }

    .carousel-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
        z-index: var(--z-low);
    }

    .glide__bullets {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        z-index: var(--z-medium);
    }

    .glide__bullet {
        width: 12px;
        height: 12px;
        background: rgba(255,255,255,0.5);
        border: none;
        border-radius: var(--border-radius-circle);
        margin: 0 5px;
        padding: 0;
        transition: var(--transition);
    }

    .glide__bullet:hover,
    .glide__bullet--active {
        background: var(--primary-color);
        transform: scale(1.2);
    }

    /* Responsive Hero Carousel */
    @media (max-width: 1200px) {
        .carousel-content h2 {
            font-size: 3rem;
        }
    }

    @media (max-width: 992px) {
        .hero-carousel {
            height: 70vh;
        }
        
        .carousel-content {
            left: 5%;
            max-width: 400px;
        }
        
        .carousel-content h2 {
            font-size: 2.5rem;
        }
        
        .carousel-content p {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 768px) {
        .hero-carousel {
            height: 60vh;
        }
        
        .carousel-content {
            left: 5%;
            max-width: 300px;
        }
        
        .carousel-content h2 {
            font-size: 2rem;
        }
        
        .carousel-content p {
            font-size: 1rem;
        }
    }

    @media (max-width: 576px) {
        .hero-carousel {
            height: 50vh;
        }
        
        .carousel-content {
            left: 5%;
            max-width: 250px;
        }
        
        .carousel-content h2 {
            font-size: 1.8rem;
        }
        
        .carousel-content p {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 400px) {
        .hero-carousel {
            height: 45vh;
        }
        
        .carousel-content {
            left: 5%;
            max-width: 200px;
        }
        
        .carousel-content h2 {
            font-size: 1.5rem;
        }
        
        .carousel-content p {
            font-size: 0.8rem;
        }
    }
</style>

<script>
    // Initialize Hero Carousel
    document.addEventListener('DOMContentLoaded', function() {
        const heroCarousel = document.querySelector('.hero-carousel .glide');
        if (heroCarousel) {
            new Glide('.hero-carousel .glide', {
                type: 'carousel',
                autoplay: 5000,
                animationDuration: 800,
                hoverpause: true,
                perView: 1,
                gap: 0
            }).mount();
        }
    });
</script>