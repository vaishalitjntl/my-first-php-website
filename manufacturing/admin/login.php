<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'admin-header.php';
?>

<main>

    <section class="page-header">
        <div class="container">
            <h1>Admin Login</h1>
            <p>Login to manage the manufacturing website</p>
        </div>
    </section>

    <section class="content-section">
        <div class="container">

            <div class="admin-login-box">

                <h2>Administrator Login</h2>

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

                    <button type="submit">
                        Login
                    </button>

                </form>

            </div>

        </div>
    </section>

</main>

<?php
include 'admin-footer.php';
?>