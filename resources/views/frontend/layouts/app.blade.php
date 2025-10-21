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