@extends('frontend.layouts.app')

@section('title', 'Shopping Cart')

@section('styles')
    <style>
        .cart-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: var(--container-padding);
        }

        .cart-header {
            text-align: center;
            margin-bottom: var(--element-margin);
        }

        .cart-header h1 {
            font-family: var(--font-secondary);
            color: var(--dark-color);
            margin-bottom: 15px;
        }

        .cart-content {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 40px;
            margin-bottom: 40px;
        }

        .cart-items {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            overflow: hidden;
        }

        .cart-item {
            display: grid;
            grid-template-columns: 100px 1fr auto auto;
            gap: 20px;
            padding: 20px;
            border-bottom: 1px solid #eee;
            align-items: center;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: var(--border-radius-sm);
        }

        .cart-item-details h3 {
            font-family: var(--font-primary);
            color: var(--dark-color);
            margin-bottom: 5px;
        }

        .cart-item-price {
            color: var(--primary-color);
            font-weight: 600;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            background: var(--white);
            border-radius: var(--border-radius-circle);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .quantity-btn:hover {
            background: var(--light-color);
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: var(--border-radius-sm);
            padding: 5px;
        }

        .cart-item-total {
            font-weight: 700;
            color: var(--dark-color);
        }

        .btn-remove-item {
            background: none;
            border: none;
            color: var(--gray-color);
            cursor: pointer;
            padding: 5px;
            transition: var(--transition);
        }

        .btn-remove-item:hover {
            color: #dc3545;
        }

        .cart-summary {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            padding: 25px;
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .summary-title {
            font-family: var(--font-secondary);
            color: var(--dark-color);
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .summary-total {
            font-weight: 700;
            font-size: 1.2em;
            color: var(--dark-color);
            border-top: 1px solid #eee;
            padding-top: 15px;
            margin-top: 15px;
        }

        .btn-checkout {
            width: 100%;
            padding: var(--btn-padding);
            background: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: var(--btn-radius);
            font-family: var(--font-primary);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 20px;
        }

        .btn-checkout:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .empty-cart {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-cart-icon {
            font-size: 4em;
            color: var(--gray-color);
            margin-bottom: 20px;
        }

        .continue-shopping {
            display: inline-block;
            padding: var(--btn-padding);
            background: var(--primary-color);
            color: var(--white);
            text-decoration: none;
            border-radius: var(--btn-radius);
            transition: var(--transition);
            margin-top: 20px;
        }

        .continue-shopping:hover {
            background: var(--primary-dark);
        }

        @media (max-width: 768px) {
            .cart-content {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .cart-item {
                grid-template-columns: 80px 1fr;
                gap: 15px;
            }

            .cart-item-img {
                width: 80px;
                height: 80px;
            }

            .quantity-controls {
                grid-column: 1 / -1;
                justify-content: center;
            }
        }
    </style>
@endsection

@section('content')
    <div class="cart-container">
        <div class="cart-header">
            <h1>Shopping Cart</h1>
            <p>Review your items and proceed to checkout</p>
        </div>

        <div class="cart-content">
            <div class="cart-items">
                <!-- Cart Item 1 -->
                <div class="cart-item">
                    <img src="/images/product1.jpg" alt="Product" class="cart-item-img">
                    <div class="cart-item-details">
                        <h3>Premium Leather Watch</h3>
                        <div class="cart-item-price">$249.99</div>
                    </div>
                    <div class="quantity-controls">
                        <button class="quantity-btn" onclick="updateQuantity(1, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1"
                            onchange="updateQuantity(1, 0, this.value)">
                        <button class="quantity-btn" onclick="updateQuantity(1, 1)">+</button>
                    </div>
                    <div class="cart-item-total">$249.99</div>
                    <button class="btn-remove-item" onclick="removeFromCart(1)">×</button>
                </div>

                <!-- Cart Item 2 -->
                <div class="cart-item">
                    <img src="/images/product2.jpg" alt="Product" class="cart-item-img">
                    <div class="cart-item-details">
                        <h3>Wireless Headphones</h3>
                        <div class="cart-item-price">$179.99</div>
                    </div>
                    <div class="quantity-controls">
                        <button class="quantity-btn" onclick="updateQuantity(2, -1)">-</button>
                        <input type="number" class="quantity-input" value="1" min="1"
                            onchange="updateQuantity(2, 0, this.value)">
                        <button class="quantity-btn" onclick="updateQuantity(2, 1)">+</button>
                    </div>
                    <div class="cart-item-total">$179.99</div>
                    <button class="btn-remove-item" onclick="removeFromCart(2)">×</button>
                </div>
            </div>

            <div class="cart-summary">
                <h3 class="summary-title">Order Summary</h3>
                <div class="summary-row">
                    <span>Subtotal:</span>
                    <span id="subtotal">$429.98</span>
                </div>
                <div class="summary-row">
                    <span>Shipping:</span>
                    <span id="shipping">$0.00</span>
                </div>
                <div class="summary-row">
                    <span>Tax:</span>
                    <span id="tax">$34.40</span>
                </div>
                <div class="summary-row summary-total">
                    <span>Total:</span>
                    <span id="total">$464.38</span>
                </div>
                <button class="btn-checkout" onclick="proceedToCheckout()">Proceed to Checkout</button>
            </div>
        </div>

        <!-- Empty State (hidden when items exist) -->
        <!-- <div class="empty-cart">
            <div class="empty-cart-icon">🛒</div>
            <h3>Your cart is empty</h3>
            <p>Add some items to your cart to get started</p>
            <a href="/products" class="continue-shopping">Continue Shopping</a>
        </div> -->
    </div>
@endsection

@section('scripts')
    <script>
        let cartItems = [{
                id: 1,
                name: 'Premium Leather Watch',
                price: 249.99,
                quantity: 1
            },
            {
                id: 2,
                name: 'Wireless Headphones',
                price: 179.99,
                quantity: 1
            }
        ];

        function updateQuantity(productId, change, newValue = null) {
            const item = cartItems.find(item => item.id === productId);
            if (item) {
                if (newValue !== null) {
                    item.quantity = parseInt(newValue) || 1;
                } else {
                    item.quantity = Math.max(1, item.quantity + change);
                }
                updateCartDisplay();
            }
        }

        function removeFromCart(productId) {
            if (confirm('Are you sure you want to remove this item from your cart?')) {
                cartItems = cartItems.filter(item => item.id !== productId);
                updateCartDisplay();
                showNotification('Item removed from cart', 'success');
            }
        }

        function updateCartDisplay() {
            // Update quantities in inputs
            cartItems.forEach(item => {
                const input = document.querySelector(`[onchange="updateQuantity(${item.id}, 0, this.value)"]`);
                if (input) input.value = item.quantity;

                const totalElement = document.querySelector(`[onclick="removeFromCart(${item.id})"]`)
                    .previousElementSibling;
                if (totalElement) totalElement.textContent = `$${(item.price * item.quantity).toFixed(2)}`;
            });

            // Update summary
            const subtotal = cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const tax = subtotal * 0.08;
            const total = subtotal + tax;

            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('tax').textContent = `$${tax.toFixed(2)}`;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;
        }

        function proceedToCheckout() {
            if (cartItems.length === 0) {
                showNotification('Your cart is empty', 'error');
                return;
            }
            window.location.href = '/checkout';
        }

        function showNotification(message, type) {
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

            setTimeout(() => notification.style.transform = 'translateX(0)', 100);

            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }
    </script>
@endsection
