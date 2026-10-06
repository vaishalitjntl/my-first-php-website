<?php
include 'includes/header.php';
?>

<main>

    <!-- Page Header -->
    <section class="page-header confirmation-page-header">

        <div class="container">

            <span class="confirmation-label">
                ORDER CONFIRMATION
            </span>

            <h1>
                Order Confirmed
            </h1>

            <p>
                Thank you for your order. Your request has been received successfully.
            </p>

        </div>

    </section>


    <!-- Confirmation Content -->
    <section class="content-section">

        <div class="container">

            <div class="confirmation-layout">

                <!-- Success Card -->
                <div class="confirmation-card confirmation-success">

                    <div class="confirmation-icon">
                        ✓
                    </div>

                    <span class="section-label">
                        SUCCESSFULLY RECEIVED
                    </span>

                    <h2>
                        Thank You for Your Order!
                    </h2>

                    <p>
                        Your order has been received and our team will review
                        the details before processing it.
                    </p>


                    <div class="order-number-box">

                        <span>
                            ORDER NUMBER
                        </span>

                        <strong>
                            #ORD1001
                        </strong>

                    </div>


                    <div class="confirmation-info">

                        <div>
                            <span>
                                Order Date
                            </span>

                            <strong>
                                04 October 2026
                            </strong>
                        </div>

                        <div>
                            <span>
                                Payment Method
                            </span>

                            <strong>
                                Cash / Offline Payment
                            </strong>
                        </div>

                        <div>
                            <span>
                                Order Status
                            </span>

                            <strong class="confirmation-status">
                                Processing
                            </strong>
                        </div>

                    </div>


                    <div class="confirmation-actions">

                        <a
                            href="track-order.php"
                            class="confirmation-primary"
                        >
                            Track My Order →
                        </a>

                        <a
                            href="products.php"
                            class="confirmation-secondary"
                        >
                            Continue Shopping
                        </a>

                    </div>

                </div>


                <!-- Order Summary -->
                <div class="confirmation-card">

                    <span class="section-label">
                        ORDER SUMMARY
                    </span>

                    <h2>
                        Your Order
                    </h2>


                    <div class="confirmation-product">

                        <div class="confirmation-product-icon">
                            👕
                        </div>

                        <div>

                            <strong>
                                Industrial Uniform
                            </strong>

                            <span>
                                Quantity: 5
                            </span>

                        </div>

                        <strong>
                            ₹4,250
                        </strong>

                    </div>


                    <div class="confirmation-product">

                        <div class="confirmation-product-icon">
                            ⛑️
                        </div>

                        <div>

                            <strong>
                                Industrial Safety Helmet
                            </strong>

                            <span>
                                Quantity: 2
                            </span>

                        </div>

                        <strong>
                            ₹900
                        </strong>

                    </div>


                    <div class="summary-divider"></div>


                    <div class="summary-row">

                        <span>
                            Subtotal
                        </span>

                        <strong>
                            ₹5,150
                        </strong>

                    </div>


                    <div class="summary-row">

                        <span>
                            Delivery
                        </span>

                        <strong>
                            ₹0
                        </strong>

                    </div>


                    <div class="summary-total">

                        <span>
                            Total Amount
                        </span>

                        <strong>
                            ₹5,150
                        </strong>

                    </div>


                    <div class="confirmation-note">

                        <strong>
                            What happens next?
                        </strong>

                        <p>
                            Our team will review your order and contact you
                            regarding confirmation, preparation and delivery.
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