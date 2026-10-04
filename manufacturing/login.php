<?php
include 'includes/header.php';
?>

<main>

    <section class="page-header">

        <div class="container">

            <h1>Login</h1>

            <p>
                Login to access your account and manage your orders.
            </p>

        </div>

    </section>


    <section class="content-section">

        <div class="container">

            <div class="login-box">

                <h2>Customer Login</h2>

                <form action="#" method="post">

                    <div class="form-group">

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


                    <div class="form-group">

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


                    <div class="login-options">

                        <label>
                            <input
                                type="checkbox"
                                name="remember"
                            >

                            Remember Me

                        </label>

                        <a href="#">
                            Forgot Password?
                        </a>

                    </div>


                    <button type="submit">
                        Login
                    </button>


                    <p class="register-link">

                        Don't have an account?

                        <a href="register.php">
                            Create an Account
                        </a>

                    </p>

                </form>

            </div>

        </div>

    </section>

</main>


<?php
include 'includes/footer.php';
?>