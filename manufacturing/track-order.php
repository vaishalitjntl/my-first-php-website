<?php
include 'includes/header.php';
?>

<main>

    <section class="page-header track-page-header">

        <div class="container">

            <span class="track-label">
                ORDER TRACKING
            </span>

            <h1>
                Track Your Order
            </h1>

            <p>
                Check the current status and progress of your order.
            </p>

        </div>

    </section>


    <section class="content-section">

        <div class="container">

            <!-- Search Order -->
            <div class="track-search-card">

                <span class="section-label">
                    ORDER LOOKUP
                </span>

                <h2>
                    Find Your Order
                </h2>

                <p>
                    Enter your order number to view the latest order status.
                </p>

                <div class="track-search-form">

                    <input
                        type="text"
                        placeholder="Example: ORD1001"
                        value="ORD1001"
                    >

                    <button type="button">
                        Track Order →
                    </button>

                </div>

            </div>


            <!-- Order Status -->
            <div class="track-order-card">

                <div class="track-order-header">

                    <div>

                        <span class="section-label">
                            ORDER DETAILS
                        </span>

                        <h2>
                            Order #ORD1001
                        </h2>

                        <p>
                            Placed on 04 October 2026
                        </p>

                    </div>

                    <span class="track-current-status">
                        Processing
                    </span>

                </div>


                <!-- Progress -->
                <div class="tracking-progress">

                    <div class="tracking-step completed">

                        <div class="tracking-icon">
                            ✓
                        </div>

                        <strong>
                            Order Placed
                        </strong>

                        <span>
                            04 Oct
                        </span>

                    </div>


                    <div class="tracking-line completed-line"></div>


                    <div class="tracking-step completed">

                        <div class="tracking-icon">
                            ✓
                        </div>

                        <strong>
                            Confirmed
                        </strong>

                        <span>
                            04 Oct
                        </span>

                    </div>


                    <div class="tracking-line active-line"></div>


                    <div class="tracking-step active">

                        <div class="tracking-icon">
                            3
                        </div>

                        <strong>
                            Processing
                        </strong>

                        <span>
                            Current
                        </span>

                    </div>


                    <div class="tracking-line"></div>


                    <div class="tracking-step">

                        <div class="tracking-icon">
                            4
                        </div>

                        <strong>
                            Ready
                        </strong>

                        <span>
                            Pending
                        </span>

                    </div>


                    <div class="tracking-line"></div>


                    <div class="tracking-step">

                        <div class="tracking-icon">
                            5
                        </div>

                        <strong>
                            Delivered
                        </strong>

                        <span>
                            Pending
                        </span>

                    </div>

                </div>


                <!-- Order Information -->
                <div class="track-information">

                    <div class="track-info-card">

                        <span>
                            CUSTOMER
                        </span>

                        <strong>
                            Ravi Kumar
                        </strong>

                    </div>


                    <div class="track-info-card">

                        <span>
                            DELIVERY LOCATION
                        </span>

                        <strong>
                            Chennai, Tamil Nadu
                        </strong>

                    </div>


                    <div class="track-info-card">

                        <span>
                            TOTAL AMOUNT
                        </span>

                        <strong>
                            ₹5,150
                        </strong>

                    </div>

                </div>


                <!-- Products -->
                <div class="track-products">

                    <h3>
                        Order Items
                    </h3>


                    <div class="track-product-row">

                        <div class="track-product-icon">
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


                    <div class="track-product-row">

                        <div class="track-product-icon">
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

                </div>


                <div class="track-actions">

                    <a
                        href="products.php"
                        class="track-shopping-button"
                    >
                        Continue Shopping
                    </a>

                    <a
                        href="contact.php"
                        class="track-contact-button"
                    >
                        Contact Support
                    </a>

                </div>

            </div>

        </div>

    </section>

</main>

<?php
include 'includes/footer.php';
?>