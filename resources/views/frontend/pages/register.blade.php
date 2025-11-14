@extends('frontend.layouts.app')

@section('title', 'Create Account')

@section('styles')
    <style>
        .register-container {
            max-width: 500px;
            margin: 0 auto;
            padding: var(--container-padding);
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        .register-card {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-medium);
            padding: 40px;
            width: 100%;
        }

        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .register-header h1 {
            font-family: var(--font-secondary);
            color: var(--dark-color);
            margin-bottom: 10px;
        }

        .register-header p {
            color: var(--gray-color);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-color);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-family: var(--font-primary);
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 2px rgba(212, 167, 98, 0.2);
        }

        .password-strength {
            margin-top: 5px;
            height: 4px;
            background: #eee;
            border-radius: 2px;
            overflow: hidden;
        }

        .strength-bar {
            height: 100%;
            width: 0%;
            transition: var(--transition);
        }

        .strength-weak {
            background: #dc3545;
            width: 33%;
        }

        .strength-medium {
            background: #ffc107;
            width: 66%;
        }

        .strength-strong {
            background: #28a745;
            width: 100%;
        }

        .form-check {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 20px;
        }

        .form-check-input {
            margin-top: 3px;
        }

        .form-check-label {
            font-size: 0.9em;
            color: var(--gray-color);
        }

        .form-check-label a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .form-check-label a:hover {
            text-decoration: underline;
        }

        .btn-register {
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
            margin-bottom: 20px;
        }

        .btn-register:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .register-footer {
            text-align: center;
            color: var(--gray-color);
        }

        .register-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .register-footer a:hover {
            text-decoration: underline;
        }

        .social-register {
            margin: 25px 0;
            text-align: center;
        }

        .social-divider {
            position: relative;
            text-align: center;
            margin: 25px 0;
            color: var(--gray-color);
        }

        .social-divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #eee;
        }

        .social-divider span {
            background: var(--white);
            padding: 0 15px;
            position: relative;
        }

        .social-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .btn-social {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            background: var(--white);
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-weight: 500;
        }

        .btn-social:hover {
            border-color: var(--primary-color);
            background: rgba(212, 167, 98, 0.05);
        }

        .btn-google {
            color: #db4437;
        }

        .btn-facebook {
            color: #4267B2;
        }

        @media (max-width: 576px) {
            .register-card {
                padding: 30px 20px;
            }

            .social-buttons {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection

@section('content')
    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <h1>Create Account</h1>
                <p>Join us today and start shopping</p>
            </div>

            <form id="registerForm">
                <div class="form-group">
                    <label for="fullName">Full Name *</label>
                    <input type="text" id="fullName" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" id="password" class="form-control" required
                        oninput="checkPasswordStrength(this.value)">
                    <div class="password-strength">
                        <div class="strength-bar" id="passwordStrength"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">Confirm Password *</label>
                    <input type="password" id="confirmPassword" class="form-control" required>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="terms" class="form-check-input" required>
                    <label for="terms" class="form-check-label">
                        I agree to the <a href="/terms">Terms of Service</a> and <a href="/privacy">Privacy Policy</a>
                    </label>
                </div>

                <div class="form-check">
                    <input type="checkbox" id="newsletter" class="form-check-input">
                    <label for="newsletter" class="form-check-label">
                        Send me special offers and updates
                    </label>
                </div>

                <button type="button" class="btn-register" onclick="register()">Create Account</button>

                <div class="social-register">
                    <div class="social-divider">
                        <span>Or continue with</span>
                    </div>
                    <div class="social-buttons">
                        <button type="button" class="btn-social btn-google" onclick="socialLogin('google')">
                            <span>Google</span>
                        </button>
                        <button type="button" class="btn-social btn-facebook" onclick="socialLogin('facebook')">
                            <span>Facebook</span>
                        </button>
                    </div>
                </div>

                <div class="register-footer">
                    Already have an account? <a href="/login">Sign in</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function checkPasswordStrength(password) {
            const strengthBar = document.getElementById('passwordStrength');
            let strength = 0;

            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/\d/)) strength++;
            if (password.match(/[^a-zA-Z\d]/)) strength++;

            strengthBar.className = 'strength-bar';

            if (password.length === 0) {
                strengthBar.style.width = '0%';
            } else if (strength < 2) {
                strengthBar.classList.add('strength-weak');
            } else if (strength < 4) {
                strengthBar.classList.add('strength-medium');
            } else {
                strengthBar.classList.add('strength-strong');
            }
        }

        function register() {
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const terms = document.getElementById('terms').checked;

            // Basic validation
            if (!fullName || !email || !password || !confirmPassword) {
                showNotification('Please fill in all required fields', 'error');
                return;
            }

            if (!terms) {
                showNotification('Please accept the Terms of Service', 'error');
                return;
            }

            if (password !== confirmPassword) {
                showNotification('Passwords do not match', 'error');
                return;
            }

            if (password.length < 8) {
                showNotification('Password must be at least 8 characters long', 'error');
                return;
            }

            // Simulate registration process
            const btn = document.querySelector('.btn-register');
            const originalText = btn.textContent;

            btn.textContent = 'Creating Account...';
            btn.disabled = true;

            setTimeout(() => {
                showNotification('Account created successfully!', 'success');
                setTimeout(() => {
                    window.location.href = '/account';
                }, 2000);
            }, 2000);
        }

        function socialLogin(provider) {
            // Simulate social login
            showNotification(`Connecting with ${provider}...`, 'success');
            // In real implementation, this would redirect to OAuth flow
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

        // Real-time password confirmation check
        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;

            if (confirmPassword && password !== confirmPassword) {
                this.style.borderColor = '#dc3545';
            } else {
                this.style.borderColor = password ? '#28a745' : '#ddd';
            }
        });
    </script>
@endsection
