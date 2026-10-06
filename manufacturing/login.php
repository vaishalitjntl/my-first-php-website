<?php
include 'includes/header.php';
?>

<main>

    <section class="auth-page">

        <div class="auth-container">

            <!-- Left Side -->
            <div class="auth-visual">

                <div class="auth-visual-overlay">
                    <span class="auth-label">MANUFACTURING SOLUTIONS</span>

                    <h1>Welcome Back!</h1>

                    <p>
                        Login to your account and manage your orders,
                        products and business requirements with ease.
                    </p>
                </div>

            </div>

            <!-- Right Side -->
            <div class="auth-form-section">

                <div class="auth-form-box">

                    <div class="auth-heading">
                        <span>ACCOUNT LOGIN</span>
                        <h2>Login to Your Account</h2>
                        <p>
                            Enter your details to continue.
                        </p>
                    </div>

                    <form action="#" method="post">

                        <div class="auth-form-group">

                            <label for="email">
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                                required
                            >

                        </div>

                        <div class="auth-form-group">

                            <label for="password">
                                Password
                            </label>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Enter your password"
                                required
                            >

                        </div>

                        <div class="auth-options">

                            <label class="remember-option">
                                <input
                                    type="checkbox"
                                    name="remember"
                                >
                                <span>Remember me</span>
                            </label>

                            <a href="#">
                                Forgot Password?
                            </a>

                        </div>

                        <button
                            type="submit"
                            class="auth-submit"
                        >
                            Login
                        </button>

                    </form>

                    <div class="auth-register-link">

                        <p>
                            Don't have an account?
                            <a href="register.php">
                                Register
                            </a>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php
include 'includes/footer.php';
?>