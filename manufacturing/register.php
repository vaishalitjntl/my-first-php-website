<?php
include 'includes/header.php';
?>

<main>

    <section class="auth-page">

        <div class="auth-container">

            <!-- Left Side -->
            <div class="auth-visual">

                <div class="auth-visual-overlay">

                    <span class="auth-label">
                        MANUFACTURING SOLUTIONS
                    </span>

                    <h1>Create Your Account</h1>

                    <p>
                        Register with us to place orders, manage your
                        account and easily track your business requirements.
                    </p>

                </div>

            </div>


            <!-- Right Side -->
            <div class="auth-form-section">

                <div class="auth-form-box">

                    <div class="auth-heading">

                        <span>NEW CUSTOMER</span>

                        <h2>Create an Account</h2>

                        <p>
                            Fill in your details to get started.
                        </p>

                    </div>


                    <form action="#" method="post">

                        <div class="auth-form-group">

                            <label for="name">
                                Full Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter your full name"
                                required
                            >

                        </div>


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

                            <label for="phone">
                                Phone Number
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="Enter your phone number"
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
                                placeholder="Create a password"
                                required
                            >

                        </div>


                        <div class="auth-form-group">

                            <label for="confirm_password">
                                Confirm Password
                            </label>

                            <input
                                type="password"
                                id="confirm_password"
                                name="confirm_password"
                                placeholder="Confirm your password"
                                required
                            >

                        </div>


                        <button
                            type="submit"
                            class="auth-submit"
                        >
                            Create Account
                        </button>

                    </form>


                    <div class="auth-register-link">

                        <p>
                            Already have an account?

                            <a href="login.php">
                                Login
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