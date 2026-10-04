<?php
include 'includes/header.php';
?>

<main>

    <section class="page-header">

        <div class="container">

            <h1>Order Confirmation</h1>

            <p>
                Thank you for placing your order with us.
            </p>

        </div>

    </section>


    <section class="content-section">

        <div class="container">

            <div class="order-confirmation-box">

                <div class="confirmation-icon">
                    ✓
                </div>

                <h2>Order Placed Successfully!</h2>

                <p>
                    Thank you for your order.
                    We have received your order details and
                    will contact you for confirmation.
                </p>


                <div class="order-summary">

                    <h3>Order Details</h3>

                    <p>
                        <strong>Order Number:</strong>
                        <span id="order-number">
                            ORD1001
                        </span>
                    </p>

                    <p>
                        <strong>Order Status:</strong>
                        <span class="status-badge status-pending">
                            Pending Confirmation
                        </span>
                    </p>

                </div>


                <div class="confirmation-actions">

                    <a href="products.php">
                        Continue Shopping
                    </a>

                    <a href="track-order.php">
                        Track Order
                    </a>

                </div>

            </div>

        </div>

    </section>

</main>


<?php
include 'includes/footer.php';
?>