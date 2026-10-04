<?php
include 'includes/header.php';
?>

<main>

    <!-- Page Header -->

    <section class="page-header">

        <div class="container">

            <h1>Track Your Order</h1>

            <p>
                Check the current status of your order.
            </p>

        </div>

    </section>


    <!-- Track Order -->

    <section class="content-section">

        <div class="container">

            <div class="track-order-box">

                <h2>Enter Your Order Details</h2>

                <p>
                    Enter your order number and registered phone number
                    to check your order status.
                </p>


                <form action="#" method="post">

                    <div class="form-group">

                        <label for="order_number">
                            Order Number
                        </label>

                        <input
                            type="text"
                            id="order_number"
                            name="order_number"
                            placeholder="Example: ORD1001"
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


                    <button type="submit">
                        Track Order
                    </button>

                </form>

            </div>


            <!-- Sample Order Status -->

            <div class="order-tracking-result">

                <h2>Order Status</h2>

                <div class="tracking-order-info">

                    <p>
                        <strong>Order Number:</strong>
                        ORD1001
                    </p>

                    <p>
                        <strong>Customer:</strong>
                        Sample Customer
                    </p>

                    <p>
                        <strong>Order Date:</strong>
                        04-10-2026
                    </p>

                    <p>
                        <strong>Current Status:</strong>

                        <span class="status-badge status-processing">
                            Processing
                        </span>

                    </p>

                </div>


                <div class="tracking-timeline">

                    <div class="tracking-step completed">

                        <div class="tracking-dot">
                            ✓
                        </div>

                        <div>

                            <h3>Order Placed</h3>

                            <p>
                                Your order has been received.
                            </p>

                        </div>

                    </div>


                    <div class="tracking-step completed">

                        <div class="tracking-dot">
                            ✓
                        </div>

                        <div>

                            <h3>Order Confirmed</h3>

                            <p>
                                Your order has been confirmed.
                            </p>

                        </div>

                    </div>


                    <div class="tracking-step active">

                        <div class="tracking-dot">
                            3
                        </div>

                        <div>

                            <h3>Processing</h3>

                            <p>
                                Your order is currently being prepared.
                            </p>

                        </div>

                    </div>


                    <div class="tracking-step">

                        <div class="tracking-dot">
                            4
                        </div>

                        <div>

                            <h3>Out for Delivery</h3>

                            <p>
                                Your order will be delivered to you.
                            </p>

                        </div>

                    </div>


                    <div class="tracking-step">

                        <div class="tracking-dot">
                            5
                        </div>

                        <div>

                            <h3>Delivered</h3>

                            <p>
                                Order successfully delivered.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>


<?php
include 'includes/footer.php';
?>