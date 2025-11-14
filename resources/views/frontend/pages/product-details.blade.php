@extends('frontend.layouts.app')

@section('title', 'Artisan Leather Briefcase')

@section('styles')
    <style>
        .product-details-page {
            padding: 40px 0;
            background: var(--light-color);
        }

        .product-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            background: var(--white);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
        }

        @media (max-width: 900px) {
            .product-grid {
                grid-template-columns: 1fr;
                gap: 25px;
                padding: 20px;
            }
        }

        /* Minimal Image Gallery */
        .product-gallery {
            position: relative;
        }

        .main-image-container {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            background: #f8f9fa;
        }

        .main-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }

        .thumbnail-strip {
            display: flex;
            gap: 8px;
            margin-top: 15px;
            justify-content: center;
        }

        .thumbnail {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: var(--border-radius-sm);
            cursor: pointer;
            border: 2px solid transparent;
            opacity: 0.7;
            transition: all 0.2s ease;
        }

        .thumbnail:hover,
        .thumbnail.active {
            opacity: 1;
            border-color: var(--primary-color);
        }

        /* Product Info */
        .product-info {
            padding: 10px 0;
        }

        .product-title {
            font-size: 1.8em;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .price {
            font-size: 1.5em;
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 20px;
        }

        .description {
            margin-bottom: 25px;
        }

        .description p {
            line-height: 1.6;
            color: var(--gray-color);
            font-size: 0.95em;
        }

        /* Selection Groups */
        .selection-group {
            margin-bottom: 20px;
        }

        .selection-label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
            color: var(--dark-color);
        }

        .selection-input {
            width: 100%;
            max-width: 200px;
            padding: 10px 12px;
            border: 1px solid #e0e0e0;
            border-radius: var(--border-radius-sm);
            font-family: var(--font-primary);
            background: var(--white);
            transition: border-color 0.2s ease;
        }

        .selection-input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 12px;
            margin-top: 30px;
        }

        .btn-add-to-cart {
            flex: 1;
            padding: 14px 20px;
            background: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: var(--border-radius);
            font-family: var(--font-primary);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn-add-to-cart:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }

        .btn-wishlist {
            padding: 14px 20px;
            background: transparent;
            border: 1px solid #e0e0e0;
            border-radius: var(--border-radius);
            cursor: pointer;
            transition: all 0.2s ease;
            color: var(--gray-color);
        }

        .btn-wishlist:hover {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }

        .btn-wishlist.active {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--white);
        }

        /* Product Meta */
        .product-meta {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #f0f0f0;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 8px;
            color: var(--gray-color);
            font-size: 0.9em;
        }

        .meta-item i {
            color: var(--primary-color);
        }
    </style>
@endsection

@section('content')
    <div class="product-details-page">
        <div class="product-grid">
            <!-- Image Gallery -->
            <div class="product-gallery">
                <div class="main-image-container">
                    <img id="main-image" src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Artisan Leather Briefcase" class="main-image">
                </div>
                
                <div class="thumbnail-strip">
                    <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" 
                         data-full="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="thumbnail active" alt="Front view">
                    
                    <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" 
                         data-full="https://images.unsplash.com/photo-1584917865442-de89df76afd3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="thumbnail" alt="Side view">
                    
                    <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" 
                         data-full="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         class="thumbnail" alt="Interior view">
                </div>
            </div>
            
            <!-- Product Info -->
            <div class="product-info">
                <h1 class="product-title">Artisan Leather Briefcase</h1>
                
                <div class="price">$399.00</div>
                
                <div class="description">
                    <p>Handcrafted from full-grain Italian leather, this briefcase combines timeless elegance with modern functionality. Features brass hardware, multiple compartments, and a padded laptop sleeve for your 15" device.</p>
                </div>

                <div class="selection-group">
                    <label class="selection-label" for="color">Color</label>
                    <select id="color" name="color" class="selection-input">
                        <option value="brown">Classic Brown</option>
                        <option value="black">Midnight Black</option>
                        <option value="cognac">Vintage Cognac</option>
                    </select>
                </div>
                
                <div class="selection-group">
                    <label class="selection-label" for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="10" class="selection-input">
                </div>

                <div class="action-buttons">
                    <button class="btn-add-to-cart" id="add-to-cart-btn">
                        Add to Cart
                    </button>
                    <button class="btn-wishlist" id="wishlist-btn" title="Add to Wishlist">
                        ♡
                    </button>
                </div>

                <div class="product-meta">
                    <div class="meta-item">
                        <i>✓</i> Free shipping worldwide
                    </div>
                    <div class="meta-item">
                        <i>✓</i> 30-day return policy
                    </div>
                    <div class="meta-item">
                        <i>✓</i> 2-year warranty
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mainImage = document.getElementById('main-image');
            const thumbnails = document.querySelectorAll('.thumbnail');
            const addToCartBtn = document.getElementById('add-to-cart-btn');
            const wishlistBtn = document.getElementById('wishlist-btn');
            const productName = document.querySelector('.product-title').textContent;

            // Image Gallery - Smooth transitions
            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', () => {
                    const newSrc = thumb.getAttribute('data-full');
                    
                    // Fade out current image
                    mainImage.style.opacity = '0';
                    
                    setTimeout(() => {
                        mainImage.src = newSrc;
                        mainImage.style.opacity = '1';
                        
                        // Update active thumbnail
                        thumbnails.forEach(t => t.classList.remove('active'));
                        thumb.classList.add('active');
                    }, 150);
                });
            });
            
            // Add to Cart with loading state
            addToCartBtn.addEventListener('click', () => {
                const quantity = document.getElementById('quantity').value;
                const color = document.getElementById('color').value;
                const originalText = addToCartBtn.textContent;
                
                // Show loading state
                addToCartBtn.textContent = 'Adding...';
                addToCartBtn.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    // Show success
                    addToCartBtn.textContent = '✓ Added to Cart';
                    addToCartBtn.style.background = '#28a745';
                    
                    // Reset after 2 seconds
                    setTimeout(() => {
                        addToCartBtn.textContent = originalText;
                        addToCartBtn.style.background = '';
                        addToCartBtn.disabled = false;
                    }, 2000);
                    
                    // In real app: axios.post('/cart/add', { productId, quantity, color })
                    console.log(`Added ${quantity} ${color} ${productName} to cart`);
                }, 800);
            });
            
            // Wishlist toggle
            wishlistBtn.addEventListener('click', () => {
                const isActive = wishlistBtn.classList.contains('active');
                
                if (isActive) {
                    // Remove from wishlist
                    wishlistBtn.classList.remove('active');
                    wishlistBtn.textContent = '♡';
                    wishlistBtn.title = 'Add to Wishlist';
                    console.log('Removed from wishlist');
                } else {
                    // Add to wishlist
                    wishlistBtn.classList.add('active');
                    wishlistBtn.textContent = '♥';
                    wishlistBtn.title = 'Remove from Wishlist';
                    console.log('Added to wishlist');
                    
                    // In real app: axios.post('/wishlist/add', { productId })
                }
            });

            // Quantity input validation
            const quantityInput = document.getElementById('quantity');
            quantityInput.addEventListener('change', (e) => {
                let value = parseInt(e.target.value);
                if (value < 1) e.target.value = 1;
                if (value > 10) e.target.value = 10;
            });
        });
    </script>
@endsection