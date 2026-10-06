<?php

include 'admin-header.php';

?>

<main>

    <!-- Page Header -->
    <section class="page-header">

        <div class="container">

            <h1>Order Details</h1>

            <p>
                View complete customer order information
            </p>

        </div>

    </section>


    <!-- Order Details -->
    <section class="content-section">

        <div class="container">

            <div class="order-details-header">

                <div>

                    <h2>Order #ORD1001</h2>

                    <p>
                        Placed on 04-10-2026
                    </p>

                </div>

                <span class="status-badge status-processing">
                    Processing
                </span>

            </div>


            <!-- Customer Information -->
            <div class="order-detail-card">

                <h2>Customer Information</h2>

                <div class="order-info-grid">

                    <div class="order-info-item">

                        <span>Customer Name</span>

                        <strong>Ravi Kumar</strong>

                    </div>


                    <div class="order-info-item">

                        <span>Email</span>

                        <strong>ravi@example.com</strong>

                    </div>


                    <div class="order-info-item">

                        <span>Phone</span>

                        <strong>+91 98765 43210</strong>

                    </div>


                    <div class="order-info-item">

                        <span>Address</span>

                        <strong>
                            Chennai, Tamil Nadu, India
                        </strong>

                    </div>

                </div>

            </div>


            <!-- Product Information -->
            <div class="order-detail-card">

                <h2>Ordered Products</h2>

                <div class="admin-table">

                    <table>

                        <thead>

                            <tr>

                                <th>Product</th>

                                <th>Category</th>

                                <th>Quantity</th>

                                <th>Price</th>

                                <th>Total</th>

                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td>
                                    Industrial Uniform
                                </td>

                                <td>
                                    Garments & Uniforms
                                </td>

                                <td>
                                    5
                                </td>

                                <td>
                                    ₹850
                                </td>

                                <td>
                                    ₹4,250
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    Industrial Safety Helmet
                                </td>

                                <td>
                                    Fire & Safety
                                </td>

                                <td>
                                    2
                                </td>

                                <td>
                                    ₹450
                                </td>

                                <td>
                                    ₹900
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            <!-- Payment Information -->
            <div class="order-detail-card">

                <h2>Payment Information</h2>

                <div class="order-info-grid">

                    <div class="order-info-item">

                        <span>Payment Status</span>

                        <strong>Pending</strong>

                    </div>


                    <div class="order-info-item">

                        <span>Payment Method</span>

                        <strong>Cash / Online</strong>

                    </div>


                    <div class="order-info-item">

                        <span>Subtotal</span>

                        <strong>₹5,150</strong>

                    </div>


                    <div class="order-info-item">

                        <span>Grand Total</span>

                        <strong>₹5,150</strong>

                    </div>

                </div>

            </div>


            <!-- Order Status -->
            <div class="order-detail-card">

                <h2>Update Order Status</h2>

                <div class="order-status-form">

                    <label for="order-status">
                        Current Status
                    </label>

                    <select id="order-status">

                        <option>Pending</option>

                        <option selected>
                            Processing
                        </option>

                        <option>Confirmed</option>

                        <option>Preparing</option>

                        <option>Ready for Delivery</option>

                        <option>Out for Delivery</option>

                        <option>Delivered</option>

                        <option>Cancelled</option>

                    </select>

                    <button type="button">
                        Update Status
                    </button>

                </div>

            </div>


            <!-- Back Button -->
            <div class="order-details-actions">

                <a href="orders.php" class="admin-back-button">
                    ← Back to Orders
                </a>

            </div>

        </div>

    </section>

</main>


<?php

include 'admin-footer.php';

?>