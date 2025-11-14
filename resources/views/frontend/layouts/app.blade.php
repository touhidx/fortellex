<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortelle - Premium Fashion</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Glide.js for lightweight carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.theme.min.css">

    <!-- Main CSS Variables and Base Styles -->
    <style>
        /* CSS Variables */
        :root {
            /* Colors */
            --primary-color: #d4a762;
            --primary-dark: #b89352;
            --dark-color: #2a2a2a;
            --light-color: #f8f9fa;
            --gray-color: #6c757d;
            --white: #ffffff;
            --black: #000000;

            /* Typography */
            --font-primary: 'Montserrat', sans-serif;
            --font-secondary: 'Playfair Display', serif;

            /* Spacing */
            --section-padding: 24px 0;
            --element-margin: 30px;
            --container-padding: 15px;

            /* Transitions */
            --transition: all 0.3s ease;
            --transition-slow: all 0.6s ease;

            /* Shadows */
            --shadow-light: 0 2px 15px rgba(0, 0, 0, 0.1);
            --shadow-medium: 0 5px 20px rgba(0, 0, 0, 0.1);
            --shadow-heavy: 0 15px 30px rgba(0, 0, 0, 0.1);

            /* Border Radius */
            --border-radius-sm: 4px;
            --border-radius: 8px;
            --border-radius-lg: 20px;
            --border-radius-circle: 50%;

            /* Button Sizes */
            --btn-padding: 10px 25px;
            --btn-radius: 30px;

            /* Z-index */
            --z-low: 1;
            --z-medium: 2;
            --z-high: 3;
        }

        /* Base Styles */
        body {
            font-family: var(--font-primary);
            color: var(--dark-color);
            overflow-x: hidden;
        }

        /* margin top for all pages */
        .main {
            margin-top: 0.5625rem;
        }

        .about-page,
        .cart-container,
        .checkout-page,
        .contact-page,
        .hot-deals-page,
        .product-details-page,
        .register-card,
        .shop-page,
        .wishlist-container {
            margin-top: 7.875rem;
        }


        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: var(--font-secondary);
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--white);
            padding: var(--btn-padding);
            border-radius: var(--btn-radius);
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
            border-radius: var(--btn-radius);
            padding: var(--btn-padding);
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


        /* <!-- Header & Footer CSS --> */
        /* Header Styles */
        .fortelle-navbar {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow-light);
            transition: var(--transition);
            padding: 15px 0;
        }

        .fortelle-navbar.scrolled {
            padding: 10px 0;
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow-medium);
        }

        .fortelle-logo {
            font-family: var(--font-secondary);
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

        /* Enhanced Search Bar */
        .search-container {
            position: relative;
            display: flex;
            align-items: center;
            width: 320px;
            max-width: 100%;
        }

        .category-dropdown {
            border: 1px solid #e0e0e0;
            border-right: none;
            border-radius: var(--border-radius-lg) 0 0 var(--border-radius-lg);
            padding: 8px 15px;
            background: var(--white);
            cursor: pointer;
            transition: var(--transition);
            font-size: 14px;
            min-width: 120px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            white-space: nowrap;
        }

        .category-dropdown:hover {
            background: #f8f9fa;
        }

        .category-dropdown:after {
            content: '\F229';
            font-family: 'bootstrap-icons';
            font-size: 12px;
            margin-left: 5px;
        }

        .category-menu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 200px;
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-heavy);
            z-index: var(--z-high);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: var(--transition);
        }

        .category-dropdown:hover .category-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .category-menu a {
            display: block;
            padding: 10px 15px;
            color: var(--dark-color);
            text-decoration: none;
            transition: var(--transition);
            border-bottom: 1px solid #f0f0f0;
        }

        .category-menu a:hover {
            background: #f8f9fa;
            color: var(--primary-color);
        }

        .category-menu a:last-child {
            border-bottom: none;
        }

        .search-box {
            border: 1px solid #e0e0e0;
            border-left: none;
            border-right: none;
            padding: 8px 15px;
            transition: var(--transition);
            width: 100%;
            font-size: 14px;
        }

        .search-box:focus {
            border-color: var(--primary-color);
            outline: none;
        }

        .search-btn {
            border: 1px solid #e0e0e0;
            border-left: none;
            border-radius: 0 var(--border-radius-lg) var(--border-radius-lg) 0;
            background: var(--white);
            padding: 8px 15px;
            transition: var(--transition);
            color: var(--dark-color);
            font-size: 14px;
        }

        .search-btn:hover {
            background: var(--primary-color);
            color: var(--white);
            border-color: var(--primary-color);
        }

        .icon-btn {
            position: relative;
            color: var(--dark-color);
            margin-left: 15px;
            transition: var(--transition);
        }

        .icon-btn:hover {
            color: var(--primary-color);
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--primary-color);
            color: var(--white);
            border-radius: var(--border-radius-circle);
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        /* Footer Styles */
        .fortelle-footer {
            background-color: var(--dark-color);
            color: var(--white);
            padding: 80px 0 30px;
        }

        .footer-logo {
            font-family: var(--font-secondary);
            font-size: 28px;
            font-weight: 700;
            color: var(--white);
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
            color: var(--white);
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
            text-decoration: none;
        }

        .footer-links a:hover {
            color: var(--primary-color);
            text-decoration: none;

        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius-circle);
            color: var(--white);
            margin-right: 10px;
            transition: var(--transition);
        }

        .social-icons a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        /* Desktop Layout Adjustments */
        @media (min-width: 992px) {
            .search-section {
                flex: 1;
                justify-content: center;
            }

            .icons-section {
                margin-left: auto !important;
                margin-right: 0 !important;
            }

            .icon-btn {
                margin-left: 20px;
            }

            /* Adjust navigation spacing for more items */
            .navbar-nav .nav-item {
                margin: 0 8px;
            }

            .nav-link {
                margin: 0 8px;
                font-size: 15px;
            }
        }

        /* Mobile Layout Adjustments */
        @media (max-width: 991px) {
            .search-container {
                width: 100%;
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .mobile-nav-left {
                text-align: left;
                margin-top: 15px;
                padding-left: 15px;
            }

            .nav-link {
                margin: 5px 0;
                text-align: left;
                padding-left: 0;
                font-size: 16px;
            }

            .icons-section {
                justify-content: center;
                width: 100%;
                margin-top: 15px;
            }

            .icon-btn {
                margin-left: 20px;
                margin-right: 20px;
            }
        }

        @media (max-width: 768px) {
            .fortelle-logo {
                font-size: 24px;
            }

            .category-dropdown {
                min-width: 100px;
                font-size: 12px;
                padding: 8px 10px;
            }

            .search-box {
                padding: 8px 10px;
            }

            .search-btn {
                padding: 8px 12px;
            }

            .nav-link {
                font-size: 15px;
            }
        }

        @media (max-width: 576px) {
            .fortelle-logo {
                font-size: 22px;
            }

            .category-dropdown {
                min-width: 80px;
                font-size: 11px;
                padding: 6px 8px;
            }

            .search-box {
                padding: 6px 8px;
                font-size: 12px;
            }

            .search-btn {
                padding: 6px 10px;
                font-size: 12px;

            }

            .icon-btn {
                margin-left: 15px;
                margin-right: 15px;
            }

            .category-menu {
                width: 180px;
            }

            .nav-link {
                font-size: 14px;
            }
        }

        @media (max-width: 400px) {
            .category-dropdown {
                min-width: 70px;
                font-size: 10px;
                padding: 5px 6px;
            }

            .search-box {
                padding: 5px 6px;
                font-size: 11px;
            }

            .search-btn {
                padding: 5px 8px;
                font-size: 11px;
            }

            .icon-btn {
                margin-left: 10px;
                margin-right: 10px;
            }

            .category-menu {
                width: 160px;
            }

            .category-menu a {
                padding: 8px 12px;
                font-size: 12px;
            }

            .nav-link {
                font-size: 13px;
            }
        }
    </style>

    @yield('styles')
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <!-- Main Navigation - Moved to left on mobile -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mobile-nav-left">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/hot-deals">Hot Deals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                    </ul>

                    <!-- Enhanced Search Bar -->
                    <div class="d-flex align-items-center flex-column flex-lg-row w-100 w-lg-auto search-section">
                        <div class="search-container">
                            <div class="category-dropdown">
                                All Categories
                                <div class="category-menu">
                                    <a href="/shop/women">Women's Collection</a>
                                    <a href="/shop/men">Men's Collection</a>
                                    <a href="/shop/accessories">Accessories</a>
                                    <a href="/shop/shoes">Shoes</a>
                                    <a href="/shop/bags">Bags</a>
                                    <a href="/shop/jewelry">Jewelry</a>
                                </div>
                            </div>
                            <input type="text" class="search-box" placeholder="Search products...">
                            <button class="search-btn">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>

                        <!-- Icons Section - Moved to right on desktop -->
                        <div class="d-flex ms-lg-4 mt-3 mt-lg-0 icons-section">
                            <a href="/wishlist" class="icon-btn">
                                <i class="bi bi-heart fs-5"></i>
                                <span class="cart-count">3</span>
                            </a>
                            <a href="/cart" class="icon-btn">
                                <i class="bi bi-bag fs-5"></i>
                                <span class="cart-count">5</span>
                            </a>
                            <a href="/account" class="icon-btn">
                                <i class="bi bi-person fs-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main">
        @yield('content')
    </main>
    <!-- Footer Section -->
    <footer class="fortelle-footer">
        <div class="container">
            <div class="row">
                <!-- About Column -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <a href="/" class="footer-logo">FORTELLE</a>
                    <p class="mt-3">Fortelle is a premium fashion destination offering curated collections for the
                        modern individual. We blend timeless elegance with contemporary style.</p>
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
                        <li><a href="/hot-deals">Hot Deals</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contact">Contact Us</a></li>
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
                    <p class="mb-0">&copy; 2025 Fortelle. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <img src="https://via.placeholder.com/300x30?text=Payment+Methods" alt="Payment Methods"
                        height="30">
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Glide.js for lightweight carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/glide.min.js"></script>

    <!-- Header & Footer JS -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.fortelle-navbar');
            if (navbar && window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else if (navbar) {
                navbar.classList.remove('scrolled');
            }
        });

        // Search functionality
        const searchBtn = document.querySelector('.search-btn');
        if (searchBtn) {
            searchBtn.addEventListener('click', function() {
                const searchTerm = document.querySelector('.search-box').value;
                const category = document.querySelector('.category-dropdown').textContent.trim();
                if (searchTerm) {
                    alert(`Searching for "${searchTerm}" in ${category}`);
                    // In a real implementation, you would redirect to search results
                    // window.location.href = `/search?q=${encodeURIComponent(searchTerm)}&category=${encodeURIComponent(category)}`;
                }
            });
        }

        // Allow pressing Enter to search
        const searchBox = document.querySelector('.search-box');
        if (searchBox) {
            searchBox.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    document.querySelector('.search-btn').click();
                }
            });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

    <!-- Page-specific scripts -->
    @yield('scripts')

</body>

</html>
