<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortelle - Premium Fashion</title>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Glide.js for lightweight carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.theme.min.css">
    
    <style>
        :root {
            --primary-color: #d4a762;
            --primary-dark: #b89352;
            --dark-color: #2a2a2a;
            --light-color: #f8f9fa;
            --gray-color: #6c757d;
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark-color);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }
        
        /* Header Styles */
        .fortelle-navbar {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            transition: var(--transition);
            padding: 15px 0;
        }
        
        .fortelle-navbar.scrolled {
            padding: 10px 0;
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .fortelle-logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: var(--dark-color);
            letter-spacing: 1px;
            position: relative;
        }
        
        .fortelle-logo:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--primary-color);
        }
        
        .nav-link {
            color: var(--dark-color) !important;
            font-weight: 500;
            margin: 0 10px;
            position: relative;
            transition: var(--transition);
        }
        
        .nav-link:before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-color);
            visibility: hidden;
            transition: all 0.3s ease-in-out;
        }
        
        .nav-link:hover:before {
            visibility: visible;
            width: 100%;
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .search-box {
            border-radius: 20px;
            border: 1px solid #e0e0e0;
            padding: 8px 15px;
            transition: var(--transition);
            width: 200px;
        }
        
        .search-box:focus {
            width: 250px;
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 0.25rem rgba(212, 167, 98, 0.25);
        }
        
        .icon-btn {
            position: relative;
            color: var(--dark-color);
            margin-left: 15px;
            transition: var(--transition);
        }
        
        .icon-btn:hover {
            color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }
        
        /* Hero Carousel */
        .hero-carousel {
            position: relative;
            height: 90vh;
            max-height: 800px;
            overflow: hidden;
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
            color: white;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
            z-index: 2;
        }
        
        .carousel-content h2 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 1rem;
            line-height: 1.2;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }
        
        .carousel-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease 0.2s;
        }
        
        .carousel-content .btn {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease 0.4s;
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
            z-index: 1;
        }
        
        .glide__bullets {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }
        
        .glide__bullet {
            width: 12px;
            height: 12px;
            background: rgba(255,255,255,0.5);
            border: none;
            border-radius: 50%;
            margin: 0 5px;
            padding: 0;
            transition: var(--transition);
        }
        
        .glide__bullet:hover,
        .glide__bullet--active {
            background: var(--primary-color);
            transform: scale(1.2);
        }
        
        /* Featured Categories */
        .featured-categories {
            padding: 80px 0;
        }
        
        .category-card {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 30px;
            height: 300px;
            transition: var(--transition);
        }
        
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
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
            color: white;
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
        
        /* New Arrivals & Trending Sections */
        .new-arrivals, .trending {
            padding: 80px 0;
        }
        
        .new-arrivals {
            background-color: #f9f9f9;
        }
        
        .product-card {
            border: none;
            border-radius: 8px;
            overflow: hidden;
            transition: var(--transition);
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
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
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
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
            border-radius: 50%;
            background: white;
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
            color: white;
            transform: scale(1.1);
        }
        
        .product-info {
            padding: 20px;
            background: white;
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
        
        /* Footer Styles */
        .fortelle-footer {
            background-color: var(--dark-color);
            color: #fff;
            padding: 80px 0 30px;
        }
        
        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: #fff;
            position: relative;
            display: inline-block;
        }
        
        .footer-logo:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--primary-color);
        }
        
        .footer-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 25px;
            position: relative;
            color: white;
        }
        
        .footer-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 40px;
            height: 2px;
            background: var(--primary-color);
        }
        
        .footer-links a {
            color: #b0b0b0;
            transition: var(--transition);
            display: inline-block;
            margin-bottom: 10px;
        }
        
        .footer-links a:hover {
            color: var(--primary-color);
            text-decoration: none;
            transform: translateX(5px);
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: #fff;
            margin-right: 10px;
            transition: var(--transition);
        }
        
        .social-icons a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }
        
        /* Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 167, 98, 0.3);
        }
        
        .btn-outline-light {
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
            transition: var(--transition);
        }
        
        .btn-outline-light:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.1);
        }
        
        /* Section Titles */
        .section-title {
            position: relative;
            margin-bottom: 60px;
            text-align: center;
        }
        
        .section-title h2 {
            font-weight: 700;
            color: var(--dark-color);
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--primary-color);
        }
        
        /* Product Carousel */
        .product-carousel {
            position: relative;
        }
        
        .glide__arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: var(--transition);
            z-index: 1;
        }
        
        .glide__arrow:hover {
            background: var(--primary-color);
            color: white;
        }
        
        .glide__arrow--left {
            left: -20px;
        }
        
        .glide__arrow--right {
            right: -20px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar navbar-expand-lg fortelle-navbar fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="/">
                    <span class="fortelle-logo">FORTELLE</span>
                </a>
                
                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarContent">
                    <!-- Main Navigation -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                    
                    <!-- Search and Icons -->
                    <div class="d-flex align-items-center">
                        <input type="text" class="search-box" placeholder="Search products...">
                        <div class="d-flex ms-3">
                            <a href="/account" class="icon-btn">
                                <i class="bi bi-person fs-5"></i>
                            </a>
                            <a href="/wishlist" class="icon-btn">
                                <i class="bi bi-heart fs-5"></i>
                                <span class="cart-count">3</span>
                            </a>
                            <a href="/cart" class="icon-btn">
                                <i class="bi bi-bag fs-5"></i>
                                <span class="cart-count">5</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Carousel -->
    <section class="hero-carousel">
        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide carousel-slide">
                        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Summer Collection" class="carousel-image">
                        <div class="carousel-overlay"></div>
                        <div class="carousel-content">
                            <h2>Summer Collection</h2>
                            <p>Discover the latest trends</p>
                            <a href="/shop/summer" class="btn btn-primary">Shop Now</a>
                        </div>
                    </li>
                    <li class="glide__slide carousel-slide">
                        <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Elegant Styles" class="carousel-image">
                        <div class="carousel-overlay"></div>
                        <div class="carousel-content">
                            <h2>Elegant Styles</h2>
                            <p>Premium quality fabrics</p>
                            <a href="/shop/premium" class="btn btn-primary">View Collection</a>
                        </div>
                    </li>
                    <li class="glide__slide carousel-slide">
                        <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="New Arrivals" class="carousel-image">
                        <div class="carousel-overlay"></div>
                        <div class="carousel-content">
                            <h2>New Arrivals</h2>
                            <p>Fresh styles for the season</p>
                            <a href="/shop/new-arrivals" class="btn btn-primary">Explore</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0"></button>
                <button class="glide__bullet" data-glide-dir="=1"></button>
                <button class="glide__bullet" data-glide-dir="=2"></button>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="featured-categories">
        <div class="container">
            <div class="section-title">
                <h2>Shop Collections</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Women's Collection">
                        <div class="category-overlay">
                            <h3>Women's Collection</h3>
                            <a href="/shop/women" class="btn btn-outline-light mt-2">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1520367445093-50dc08a59d9d?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Men's Collection">
                        <div class="category-overlay">
                            <h3>Men's Collection</h3>
                            <a href="/shop/men" class="btn btn-outline-light mt-2">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-card">
                        <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Accessories">
                        <div class="category-overlay">
                            <h3>Accessories</h3>
                            <a href="/shop/accessories" class="btn btn-outline-light mt-2">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Arrivals Section -->
    <section class="new-arrivals">
        <div class="container">
            <div class="section-title">
                <h2>New Arrivals</h2>
            </div>
            
            <div class="product-carousel">
                <div class="glide new-arrivals-carousel">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://images.unsplash.com/photo-1594223274512-ad4803739b7c?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Floral Summer Dress">
                                        <span class="product-badge">New</span>
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
                                        <h5 class="product-title">Floral Summer Dress</h5>
                                        <div class="product-price">$89.99</div>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Linen Blazer">
                                        <span class="product-badge">New</span>
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
                                        <h5 class="product-title">Linen Blazer</h5>
                                        <div class="product-price">$129.99</div>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://images.unsplash.com/photo-1582142306909-195724d1a6ee?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Silk Evening Gown">
                                        <span class="product-badge">New</span>
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
                                        <h5 class="product-title">Silk Evening Gown</h5>
                                        <div class="product-price">$199.99</div>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://images.unsplash.com/photo-1582418702059-97ebafb35d09?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Casual Summer Set">
                                        <span class="product-badge">New</span>
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
                                        <h5 class="product-title">Casual Summer Set</h5>
                                        <div class="product-price">$79.99</div>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://images.unsplash.com/photo-1585487000113-6e5f4bc9a4f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Elegant Maxi Dress">
                                        <span class="product-badge">New</span>
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
                                        <h5 class="product-title">Elegant Maxi Dress</h5>
                                        <div class="product-price">$149.99</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="bi bi-chevron-left"></i></button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="bi bi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending Section -->
    <section class="trending">
        <div class="container">
            <div class="section-title">
                <h2>Trending Now</h2>
            </div>
            
            <div class="product-carousel">
                <div class="glide trending-carousel">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Classic White Shirt">
                                        <span class="product-badge">Trending</span>
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
                                        <h5 class="product-title">Classic White Shirt</h5>
                                        <div class="product-price">$59.99</div>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://images.unsplash.com/photo-1582418702059-97ebafb35d09?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Denim Jacket">
                                        <span class="product-badge">Trending</span>
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
                                        <h5 class="product-title">Denim Jacket</h5>
                                        <div class="product-price">$89.99</div>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Leather Handbag">
                                        <span class="product-badge">Trending</span>
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
                                        <h5 class="product-title">Leather Handbag</h5>
                                        <div class="product-price">$159.99</div>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://images.unsplash.com/photo-1582142306909-195724d1a6ee?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Wide Leg Trousers">
                                        <span class="product-badge">Trending</span>
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
                                        <h5 class="product-title">Wide Leg Trousers</h5>
                                        <div class="product-price">$79.99</div>
                                    </div>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="https://images.unsplash.com/photo-1585487000113-6e5f4bc9a4f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Knit Sweater">
                                        <span class="product-badge">Trending</span>
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
                                        <h5 class="product-title">Knit Sweater</h5>
                                        <div class="product-price">$69.99</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="bi bi-chevron-left"></i></button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="bi bi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="fortelle-footer">
        <div class="container">
            <div class="row">
                <!-- About Column -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <a href="/" class="footer-logo">FORTELLE</a>
                    <p class="mt-3">Fortelle is a premium fashion destination offering curated collections for the modern individual. We blend timeless elegance with contemporary style.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-pinterest"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links Column -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Customer Service Column -->
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h4 class="footer-title">Customer Service</h4>
                    <ul class="footer-links list-unstyled">
                        <li><a href="/account">My Account</a></li>
                        <li><a href="/order-tracking">Order Tracking</a></li>
                        <li><a href="/wishlist">Wishlist</a></li>
                        <li><a href="/shipping-info">Shipping Info</a></li>
                        <li><a href="/returns">Returns & Exchanges</a></li>
                        <li><a href="/size-guide">Size Guide</a></li>
                    </ul>
                </div>
                
                <!-- Contact Column -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="footer-title">Contact Us</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="bi bi-geo-alt me-2"></i> 123 Fashion Ave, New York</li>
                        <li class="mb-3"><i class="bi bi-telephone me-2"></i> +1 (555) 123-4567</li>
                        <li class="mb-3"><i class="bi bi-envelope me-2"></i> info@fortelle.com</li>
                        <li class="mb-3"><i class="bi bi-clock me-2"></i> Mon-Fri: 9AM - 6PM</li>
                    </ul>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="row mt-5 pt-4 border-top border-secondary">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Fortelle. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <img src="https://via.placeholder.com/300x30?text=Payment+Methods" alt="Payment Methods" height="30">
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Glide.js for lightweight carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/glide.min.js"></script>
    
    <script>
        // Initialize Hero Carousel
        new Glide('.glide', {
            type: 'carousel',
            autoplay: 5000,
            animationDuration: 800,
            hoverpause: true,
            perView: 1,
            gap: 0
        }).mount();
        
        // Initialize New Arrivals Carousel
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
        
        // Initialize Trending Carousel
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
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.fortelle-navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>