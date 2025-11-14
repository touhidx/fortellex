@extends('frontend.layouts.app')

@section('title', 'My Wishlist')

@section('styles')
    <style>
        .wishlist-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: var(--container-padding);
        }

        .wishlist-header {
            text-align: center;
            margin-bottom: var(--element-margin);
        }

        .wishlist-header h1 {
            font-family: var(--font-secondary);
            color: var(--dark-color);
            margin-bottom: 15px;
        }

        .wishlist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .wishlist-item {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .wishlist-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .wishlist-item-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .wishlist-item-content {
            padding: 20px;
        }

        .wishlist-item-title {
            font-family: var(--font-primary);
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 10px;
        }

        .wishlist-item-price {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.2em;
            margin-bottom: 15px;
        }

        .wishlist-actions {
            display: flex;
            gap: 10px;
        }

        .btn-wishlist {
            flex: 1;
            padding: 8px 15px;
            border: none;
            border-radius: var(--border-radius-sm);
            cursor: pointer;
            transition: var(--transition);
            font-family: var(--font-primary);
            font-weight: 500;
        }

        .btn-move-to-cart {
            background: var(--primary-color);
            color: var(--white);
        }

        .btn-move-to-cart:hover {
            background: var(--primary-dark);
        }

        .btn-remove {
            background: var(--gray-color);
            color: var(--white);
            width: 40px;
        }

        .btn-remove:hover {
            background: #dc3545;
        }

        .empty-wishlist {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-wishlist-icon {
            font-size: 4em;
            color: var(--gray-color);
            margin-bottom: 20px;
        }

        .empty-wishlist h3 {
            color: var(--dark-color);
            margin-bottom: 15px;
            font-family: var(--font-secondary);
        }

        @media (max-width: 768px) {
            .wishlist-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 15px;
            }

            .wishlist-actions {
                flex-direction: column;
            }
        }
    </style>
@endsection

@section('content')
    <div class="wishlist-container">
        <div class="wishlist-header">
            <h1>My Wishlist</h1>
            <p>Save your favorite items for later</p>
        </div>

        <div class="wishlist-grid">
            <!-- Wishlist Item 1 -->
            <div class="wishlist-item">
                <button class="btn-remove" onclick="removeFromWishlist(1)">×</button>
                <img src="https://m.media-amazon.com/images/I/91mkkg7dORL._AC_SL1500_.jpg" alt="Product"
                    class="wishlist-item-img">
                <div class="wishlist-item-content">
                    <h3 class="wishlist-item-title">Premium Leather Watch</h3>
                    <div class="wishlist-item-price">$249.99</div>
                    <div class="wishlist-actions">
                        <button class="btn-wishlist btn-move-to-cart" onclick="moveToCart(1)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Wishlist Item 2 -->
            <div class="wishlist-item">
                <button class="btn-remove" onclick="removeFromWishlist(2)">×</button>
                <img src="https://m.media-amazon.com/images/I/91mkkg7dORL._AC_SL1500_.jpg" alt="Product"
                    class="wishlist-item-img">
                <div class="wishlist-item-content">
                    <h3 class="wishlist-item-title">Wireless Headphones</h3>
                    <div class="wishlist-item-price">$179.99</div>
                    <div class="wishlist-actions">
                        <button class="btn-wishlist btn-move-to-cart" onclick="moveToCart(2)">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Empty State (hidden when items exist) -->
        <!-- <div class="empty-wishlist">
                <div class="empty-wishlist-icon">♥</div>
                <h3>Your wishlist is empty</h3>
                <p>Start adding items you love to your wishlist</p>
                <a href="/products" class="btn btn-primary">Start Shopping</a>
            </div> -->
    </div>
@endsection

@section('scripts')
    <script>
        function removeFromWishlist(productId) {
            if (confirm('Are you sure you want to remove this item from your wishlist?')) {
                // AJAX call to remove from wishlist
                console.log('Removing product', productId, 'from wishlist');

                // Show success message
                showNotification('Item removed from wishlist', 'success');

                // Remove item from DOM
                const item = document.querySelector(`[onclick="removeFromWishlist(${productId})"]`).closest(
                    '.wishlist-item');
                item.style.opacity = '0';
                setTimeout(() => item.remove(), 300);
            }
        }

        function moveToCart(productId) {
            // AJAX call to move to cart
            console.log('Moving product', productId, 'to cart');

            // Show success message
            showNotification('Item added to cart', 'success');

            // Remove from wishlist after adding to cart
            removeFromWishlist(productId);
        }

        function showNotification(message, type) {
            // Create notification element
            const notification = document.createElement('div');
            notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 20px;
        background: ${type === 'success' ? '#28a745' : '#dc3545'};
        color: white;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-medium);
        z-index: var(--z-high);
        transform: translateX(100%);
        transition: var(--transition);
    `;
            notification.textContent = message;

            document.body.appendChild(notification);

            // Animate in
            setTimeout(() => notification.style.transform = 'translateX(0)', 100);

            // Remove after 3 seconds
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }
    </script>
@endsection
