<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'admin-header.php';
?>

<main>

    <section class="admin-login-section">

        <div class="container">

            <div class="admin-login-wrapper">

                <div class="admin-login-intro">
                    <span class="admin-login-label">MANUFACTURING SOLUTIONS</span>

                    <h1>Administration<br>Portal</h1>

                    <p>
                        Manage products, orders and customer information
                        from your administration panel.
                    </p>

                    <div class="admin-login-points">
                        <div>
                            <span>01</span>
                            <p>Product Management</p>
                        </div>

                        <div>
                            <span>02</span>
                            <p>Order Management</p>
                        </div>

                        <div>
                            <span>03</span>
                            <p>Customer Management</p>
                        </div>
                    </div>
                </div>

                <div class="admin-login-box">

                    <div class="admin-login-heading">
                        <span class="section-label">SECURE ACCESS</span>
                        <h2>Administrator Login</h2>
                        <p>Enter your credentials to continue.</p>
                    </div>

                    <form action="dashboard.php" method="post">

                        <div class="form-group">
                            <label for="username">Username</label>

                            <input
                                type="text"
                                id="username"
                                name="username"
                                placeholder="Enter username"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Enter password"
                                required
                            >
                        </div>

                        <button type="submit" class="admin-login-button">
                            Login to Dashboard
                            <span>→</span>
                        </button>

                    </form>

                    <div class="admin-login-note">
                        <span>🔒</span>
                        <p>Authorized personnel only</p>
                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php
include 'admin-footer.php';
?>