<style>
    /* --- Component Specific CSS (Responsive and Layout) ---
    */
    .product-card {
        width: 100%;
        max-width: 350px;
        border: none;
        border-radius: var(--border-radius);
        overflow: hidden;
        transition: var(--transition);
        margin-bottom: var(--element-margin);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        background: var(--white);
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
        transition: all 0.3s ease;
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
        z-index: 10;
    }

    /* Floating Actions */
    .product-actions {
        position: absolute;
        top: 15px;
        right: 15px;
        display: flex;
        flex-direction: column;
        opacity: 0;
        transform: translateX(10px);
        transition: all 0.3s ease;
        z-index: 10;
    }

    .product-card:hover .product-actions {
        opacity: 1;
        transform: translateX(0);
    }

    .product-action-btn {
        position: relative;
        /* Needed for positioning the label */
        width: 40px;
        height: 40px;
        border-radius: var(--border-radius-circle);
        background: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        color: var(--dark-color);
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    }

    .product-action-btn:hover {
        background: var(--primary-color);
        color: var(--white);
        transform: scale(1.1);
    }

    /* --- NEW: Action Label/Tooltip CSS --- */
    .product-action-label {
        position: absolute;
        right: 100%;
        /* Position to the left of the button */
        top: 50%;
        transform: translateY(-50%) translateX(-10px);
        /* Adjust for alignment and initial hide */
        background: var(--dark-color);
        color: var(--white);
        padding: 5px 10px;
        border-radius: var(--border-radius-sm);
        font-size: 12px;
        font-weight: 400;
        white-space: nowrap;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        /* Allows clicks to pass through */
        transition: opacity 0.3s ease, transform 0.3s ease;
        margin-right: 5px;
        /* Spacing between label and button */
    }

    .product-action-btn:hover .product-action-label {
        opacity: 1;
        visibility: visible;
        transform: translateY(-50%) translateX(0);
        /* Slide into view */
    }

    /* --- END NEW CSS --- */

    .product-info {
        padding: 20px;
        background: var(--white);
    }

    .product-title {
        font-weight: 600;
        margin-bottom: 5px;
        color: var(--dark-color);
        font-size: 1.2em;
    }

    .product-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
        padding-bottom: 10px;
    }

    .product-price {
        font-weight: 700;
        color: var(--primary-color);
        font-size: 18px;
    }

    .product-rating {
        display: flex;
        align-items: center;
        color: #ffc107;
        font-size: 14px;
    }

    .product-rating i {
        margin-right: 2px;
    }

    .product-rating .rating-text {
        font-size: 14px;
        color: var(--dark-color);
        margin-left: 5px;
        font-weight: 500;
    }

    /* Small Screen Action Buttons */
    .product-actions-sm {
        display: none;
        margin-top: 15px;
        gap: 10px;
    }

    .product-actions-sm .btn {
        flex-grow: 1;
        padding: 10px 15px;
        border: 1px solid var(--primary-color);
        border-radius: var(--border-radius-sm);
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 14px;
        text-align: center;
    }

    .btn-sm-quickview {
        background: var(--white);
        color: var(--primary-color);
    }

    .btn-sm-quickview:hover {
        background: var(--primary-color-light);
    }

    .btn-sm-addtocart {
        background: var(--primary-color);
        color: var(--white);
        border-color: var(--primary-color);
    }

    .btn-sm-addtocart:hover {
        background: var(--dark-color);
        border-color: var(--dark-color);
    }

    /* Responsive Logic */
    @media (max-width: 768px) {
        .product-actions {
            display: none;
        }

        .product-actions-sm {
            display: flex;
            /* Show SM buttons */
        }
    }
</style>

    <div class="product-card" data-product-id="{{ $product->id ?? '1' }}">
        <div class="product-image">
            {{-- Dynamic Image Source --}}
            <img src="{{ $product->image_url ?? 'https://img.drz.lazcdn.com/static/bd/p/f696eeeabc6350cd9abcb78fd846e7c3.jpg_400x400q75.avif' }}"
                alt="{{ $product->name ?? 'Product Name' }}">

            @if ($badge)
                <span class="product-badge">{{ $badge }}</span>
            @endif

            <div class="product-actions">
                {{-- Wishlist action using dynamic ID --}}
                <a href="/wishlist" class="product-action-btn action-wishlist">
                    <i class="bi bi-heart"></i>
                    <span class="product-action-label">Wishlist</span>
                </a>
                <a href="/product-details" class="product-action-btn action-quickview">
                    <i class="bi bi-eye"></i>
                    <span class="product-action-label">Quick View</span>
                </a>
                <a href="/cart" class="product-action-btn action-addtocart-float">
                    <i class="bi bi-bag"></i>
                    <span class="product-action-label">Add to Cart</span>
                </a>
            </div>
        </div>

        <div class="product-info">
            <h5 class="product-title">{{ $product->name ?? 'Stylish Denim Jacket' }}</h5>
            <div class="product-meta">
                {{-- Dynamic Price --}}
                <div class="product-price">${{ number_format($product->price ?? 99.99, 2) }}</div>

                {{-- Static Rating Display (You might use a loop for dynamic ratings) --}}
                <div class="product-rating">
                    @php
                        $rating = $product->rating ?? 4.5;
                        $stars = floor($rating);
                        $hasHalf = $rating - $stars >= 0.5;
                    @endphp

                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < $stars)
                            <i class="bi bi-star-fill"></i>
                        @elseif ($i == $stars && $hasHalf)
                            <i class="bi bi-star-half"></i>
                        @else
                            <i class="bi bi-star"></i>
                        @endif
                    @endfor
                    <span class="rating-text">({{ number_format($rating, 1) }})</span>
                </div>
            </div>

            <div class="product-actions-sm">
                {{-- Quick View remains JS-driven --}}
                <button class="btn btn-sm-quickview" data-product-id="{{ $product->id ?? '1' }}">Quick View</button>

                {{-- Add to Cart for Small Screen (JS-driven for simplicity, often a form in Laravel) --}}
                <button class="btn btn-sm-addtocart" data-product-id="{{ $product->id ?? '1' }}">Add to Cart</button>
            </div>
        </div>
    </div>

<script>
    // --- JavaScript for Interactions ---
    // document.addEventListener('DOMContentLoaded', function() {

    //     function showAlert(message) {
    //         // In a real Laravel app, you'd use Axios for AJAX calls and Toastr/SweetAlert for better notifications.
    //         console.log(message);
    //         alert(message);
    //     }

    //     // Handle Add to Cart (both floating and SM buttons)
    //     const cartButtons = document.querySelectorAll('.action-addtocart-float, .btn-sm-addtocart');
    //     cartButtons.forEach(button => {
    //         button.addEventListener('click', function(e) {
    //             e.preventDefault();
    //             const productCard = this.closest('.product-card');
    //             const productName = productCard.querySelector('.product-title').textContent;
    //             const productId = productCard.getAttribute('data-product-id');

    //             // Example of what an AJAX call might look like:
    //             // axios.post('/cart/add/' + productId)
    //             //     .then(response => showAlert(`${productName} added to cart!`));

    //             // showAlert(`${productName} (ID: ${productId}) preparing to add to cart...`);
    //         });
    //     });

    //     // Handle Quick View (both floating and SM buttons)
    //     const quickViewButtons = document.querySelectorAll('.action-quickview, .btn-sm-quickview');
    //     quickViewButtons.forEach(button => {
    //         button.addEventListener('click', function(e) {
    //             e.preventDefault();
    //             const productCard = this.closest('.product-card');
    //             const productName = productCard.querySelector('.product-title').textContent;
    //             const productId = productCard.getAttribute('data-product-id');

    //             // This would trigger a modal/lightbox in a real application
    //             // showAlert(`Opening Quick View modal for ${productName} (ID: ${productId}).`);
    //         });
    //     });

    //     // Handle Wishlist (Floating Icon Only)
    //     const floatingWishlist = document.querySelector('.action-wishlist');
    //     if (floatingWishlist) {
    //         floatingWishlist.addEventListener('click', function(e) {
    //             e.preventDefault();
    //             const productCard = this.closest('.product-card');
    //             const productName = productCard.querySelector('.product-title').textContent;
    //             // showAlert(`Added ${productName} to wishlist! (Requires proper form/AJAX submission)`);
    //         });
    //     }
    // });
</script>
