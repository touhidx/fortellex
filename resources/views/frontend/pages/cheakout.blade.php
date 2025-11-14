@extends('frontend.layouts.app')

@section('title', 'Secure Checkout')

@section('styles')
    <style>
        .checkout-page {
            padding: 50px 0;
        }
        .checkout-page h1 {
            margin-bottom: 40px;
            text-align: center;
        }
        .checkout-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }
        
        @media (max-width: 900px) {
            .checkout-grid {
                grid-template-columns: 1fr;
            }
        }

        .checkout-section {
            background-color: var(--white);
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            margin-bottom: 20px;
        }

        .checkout-section h2 {
            font-family: var(--font-secondary);
            color: var(--primary-dark);
            margin-top: 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 0.9em;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: var(--border-radius-sm);
            box-sizing: border-box;
            font-family: var(--font-primary);
            transition: border-color var(--transition);
        }

        .form-group input:focus, .form-group select:focus {
            border-color: var(--primary-color);
            outline: none;
        }
        
        .summary-line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 0.95em;
        }

        .summary-total {
            border-top: 2px solid var(--primary-dark);
            padding-top: 15px;
            margin-top: 15px;
            font-size: 1.2em;
            font-weight: bold;
        }

        .btn-submit {
            display: block;
            width: 100%;
            padding: var(--btn-padding);
            border-radius: var(--btn-radius);
            margin-top: 20px;
            text-transform: uppercase;
        }
    </style>
@endsection

@section('content')
    <div class="container checkout-page">
        <h1>Secure Checkout</h1>

        <form id="checkoutForm">
            <div class="checkout-grid">
                <div class="details-section">
                    <div class="checkout-section">
                        <h2>Shipping Information</h2>
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" id="fullName" name="fullName" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address Line 1</label>
                            <input type="text" id="address" name="address" required>
                        </div>
                        </div>

                    <div class="checkout-section">
                        <h2>Payment Method</h2>
                        <div class="form-group">
                            <label for="cardNumber">Card Number</label>
                            <input type="text" id="cardNumber" name="cardNumber" placeholder="**** **** **** 1234" required>
                        </div>
                        </div>
                </div>

                <div class="summary-section">
                    <div class="checkout-section">
                        <h2>Order Summary</h2>

                        <div class="summary-line"><span>Subtotal</span><span id="subtotal">$570.00</span></div>
                        <div class="summary-line"><span>Shipping</span><span id="shipping">$15.00</span></div>
                        <div class="summary-line"><span>Tax (5%)</span><span id="tax">$28.50</span></div>

                        <div class="summary-total"><span>Order Total</span><span id="total">$613.50</span></div>

                        <button type="submit" class="btn btn-submit">Place Order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const fullName = document.getElementById('fullName').value;
            
            if (fullName) {
                alert(`Thank you, ${fullName.split(' ')[0]}! Your order has been placed.`);
                // Laravel form submission logic using AJAX or standard POST would go here
            } else {
                alert('Please fill out all required fields.');
            }
        });
    </script>
@endsection