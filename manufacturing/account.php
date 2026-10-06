<?php
include 'includes/header.php';
?>

<main>

<section class="page-header account-page-header">
    <div class="container">
        <span class="account-label">CUSTOMER ACCOUNT</span>
        <h1>My Account</h1>
        <p>Manage your profile, orders and account information.</p>
    </div>
</section>

<section class="content-section">
    <div class="container">

        <div class="account-layout">

            <!-- Account Menu -->
            <aside class="account-menu">

                <div class="account-menu-heading">
                    <div class="account-avatar">C</div>
                    <div>
                        <span>WELCOME</span>
                        <h2>Customer</h2>
                    </div>
                </div>

                <a href="#profile" class="account-menu-item active">
                    <span>👤</span>
                    Profile
                </a>

                <a href="#orders" class="account-menu-item">
                    <span>📦</span>
                    My Orders
                </a>

                <a href="track-order.php" class="account-menu-item">
                    <span>🚚</span>
                    Track Order
                </a>

                <a href="logout.php" class="account-menu-item logout-link">
                    <span>↪</span>
                    Logout
                </a>

            </aside>


            <!-- Account Content -->
            <div class="account-content">

                <!-- Profile -->
                <div class="account-card" id="profile">

                    <div class="account-card-heading">
                        <div>
                            <span class="section-label">PROFILE INFORMATION</span>
                            <h2>My Profile</h2>
                        </div>

                        <span class="account-card-badge">CUSTOMER</span>
                    </div>

                    <div class="profile-details">

                        <div class="profile-item">
                            <span>FULL NAME</span>
                            <strong>Sample Customer</strong>
                        </div>

                        <div class="profile-item">
                            <span>EMAIL ADDRESS</span>
                            <strong>customer@example.com</strong>
                        </div>

                        <div class="profile-item">
                            <span>PHONE NUMBER</span>
                            <strong>+91 XXXXX XXXXX</strong>
                        </div>

                        <div class="profile-item">
                            <span>ADDRESS</span>
                            <strong>Tamil Nadu, India</strong>
                        </div>

                    </div>

                    <button type="button" class="account-button">
                        Edit Profile
                    </button>

                </div>


                <!-- Orders -->
                <div class="account-card" id="orders">

                    <div class="account-card-heading">
                        <div>
                            <span class="section-label">ORDER HISTORY</span>
                            <h2>My Recent Orders</h2>
                        </div>
                    </div>


                    <div class="account-order">

                        <div class="account-order-number">
                            <span>ORDER ID</span>
                            <strong>ORD1001</strong>
                            <p>04 October 2026</p>
                        </div>

                        <div class="account-order-amount">
                            <span>AMOUNT</span>
                            <strong>₹5,850</strong>
                        </div>

                        <span class="status-badge status-processing">
                            Processing
                        </span>

                        <a href="track-order.php" class="account-order-link">
                            Track →
                        </a>

                    </div>


                    <div class="account-order">

                        <div class="account-order-number">
                            <span>ORDER ID</span>
                            <strong>ORD1000</strong>
                            <p>28 September 2026</p>
                        </div>

                        <div class="account-order-amount">
                            <span>AMOUNT</span>
                            <strong>₹2,500</strong>
                        </div>

                        <span class="status-badge status-completed">
                            Delivered
                        </span>

                        <a href="track-order.php" class="account-order-link">
                            View →
                        </a>

                    </div>

                </div>


                <!-- Quick Help -->
                <div class="account-help">

                    <div>
                        <span class="section-label">NEED ASSISTANCE?</span>
                        <h2>Need help with your order?</h2>
                        <p>
                            Contact our team for order assistance,
                            product enquiries or delivery support.
                        </p>
                    </div>

                    <a href="contact.php">
                        Contact Support →
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

</main>

<?php
include 'includes/footer.php';
?>