<?php
include 'includes/header.php';
?>

<main>

    <section class="page-header">

        <div class="container">

            <h1>Create Account</h1>

            <p>
                Register with us to place and track your orders.
            </p>

        </div>

    </section>


    <section class="content-section">

        <div class="container">

            <div class="register-box">

                <h2>Customer Registration</h2>

                <form action="#" method="post">

                    <div class="form-row">

                        <div class="form-group">

                            <label for="first_name">
                                First Name
                            </label>

                            <input
                                type="text"
                                id="first_name"
                                name="first_name"
                                placeholder="Enter first name"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label for="last_name">
                                Last Name
                            </label>

                            <input
                                type="text"
                                id="last_name"
                                name="last_name"
                                placeholder="Enter last name"
                                required
                            >

                        </div>

                    </div>


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


                    <div class="form-group">

                        <label for="address">
                            Address
                        </label>

                        <textarea
                            id="address"
                            name="address"
                            rows="4"
                            placeholder="Enter your address"
                            required
                        ></textarea>

                    </div>


                    <div class="form-row">

                        <div class="form-group">

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


                        <div class="form-group">

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

                    </div>


                    <button type="submit">
                        Create Account
                    </button>


                    <p class="login-link">

                        Already have an account?

                        <a href="login.php">
                            Login Here
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