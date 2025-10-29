<div class="product-card">
    <div class="product-image">
        <img src="" alt="">
        <span class="product-badge"></span>
        <div class="product-actions">
            <a href="#" class="product-action-btn">
                <i class="bi bi-heart"></i>
            </a>
            <a href="#" class="product-action-btn">
                <i class="bi bi-eye"></i>
            </a>
            <a href="#" class="product-action-btn">
                <i class="bi bi-bag"></i>
            </a>
        </div>
    </div>
    <div class="product-info">
        <h5 class="product-title"></h5>
        <div class="product-price">$</div>
    </div>
</div>

<style>
    /* Product Card Styles */
    .product-card {
        border: none;
        border-radius: var(--border-radius);
        overflow: hidden;
        transition: var(--transition);
        margin-bottom: var(--element-margin);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-heavy);
    }

    .product-image {
        position: relative;
        overflow: hidden;
        height: 300px;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }

    .product-card:hover .product-image img {
        transform: scale(1.05);
    }

    .product-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: var(--primary-color);
        color: var(--white);
        padding: 5px 10px;
        border-radius: var(--border-radius-sm);
        font-size: 12px;
        font-weight: 600;
    }

    .product-actions {
        position: absolute;
        top: 15px;
        right: 15px;
        display: flex;
        flex-direction: column;
        opacity: 0;
        transform: translateX(10px);
        transition: var(--transition);
    }

    .product-card:hover .product-actions {
        opacity: 1;
        transform: translateX(0);
    }

    .product-action-btn {
        width: 40px;
        height: 40px;
        border-radius: var(--border-radius-circle);
        background: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        color: var(--dark-color);
        transition: var(--transition);
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .product-action-btn:hover {
        background: var(--primary-color);
        color: var(--white);
        transform: scale(1.1);
    }

    .product-info {
        padding: 20px;
        background: var(--white);
    }

    .product-title {
        font-weight: 600;
        margin-bottom: 5px;
        color: var(--dark-color);
    }

    .product-price {
        font-weight: 700;
        color: var(--primary-color);
        font-size: 18px;
    }

    .product-price .old-price {
        color: var(--gray-color);
        text-decoration: line-through;
        font-size: 14px;
        margin-left: 5px;
    }

    /* Responsive Product Card */
    @media (max-width: 768px) {
        .product-image {
            height: 250px;
        }
    }

    @media (max-width: 576px) {
        .product-image {
            height: 200px;
        }
    }
</style>

<script>
    // Product Card Interactions
    document.addEventListener('DOMContentLoaded', function() {
        // Add to cart functionality
        const addToCartButtons = document.querySelectorAll('.product-action-btn .bi-bag');
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const productCard = this.closest('.product-card');
                const productName = productCard.querySelector('.product-title').textContent;
                const productPrice = productCard.querySelector('.product-price').textContent;
                
                alert(`Added ${productName} to cart! ${productPrice}`);
                // In real implementation, you would add to cart logic here
            });
        });

        // Add to wishlist functionality
        const wishlistButtons = document.querySelectorAll('.product-action-btn .bi-heart');
        wishlistButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const productCard = this.closest('.product-card');
                const productName = productCard.querySelector('.product-title').textContent;
                
                alert(`Added ${productName} to wishlist!`);
                // In real implementation, you would add to wishlist logic here
            });
        });
    });
</script>