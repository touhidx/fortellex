
<style>
    /* Featured Categories Styles */
    .featured-categories {
        padding: var(--section-padding);
    }

    .category-card {
        position: relative;
        overflow: hidden;
        border-radius: var(--border-radius);
        margin-bottom: var(--element-margin);
        height: 300px;
        transition: var(--transition);
    }

    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-heavy);
    }

    .category-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .category-card:hover img {
        transform: scale(1.05);
    }

    .category-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 20px;
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
        color: var(--white);
    }

    .category-overlay h3 {
        margin-bottom: 0;
        font-weight: 700;
    }

    .category-overlay .btn {
        opacity: 0;
        transform: translateY(10px);
        transition: var(--transition);
    }

    .category-card:hover .category-overlay .btn {
        opacity: 1;
        transform: translateY(0);
    }

    /* Responsive Categories */
    @media (max-width: 768px) {
        .category-card {
            height: 250px;
        }
    }

    @media (max-width: 576px) {
        .category-card {
            height: 200px;
        }
    }
</style>


<section class="featured-categories">
    <div class="container">
        <div class="section-title">
            <h2>Shop Collections</h2>
        </div>
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4">
                <div class="category-card">
                    <img src="{{ $category['image'] }}" alt="{{ $category['name'] }}">
                    <div class="category-overlay">
                        <h3>{{ $category['name'] }}</h3>
                        <a href="{{ $category['link'] }}" class="btn btn-outline-light mt-2">Shop Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

