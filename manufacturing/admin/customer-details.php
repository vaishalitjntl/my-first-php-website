<?php

include 'admin-header.php';

?>

<main>

    <!-- Page Header -->
    <section class="page-header">

        <div class="container">

            <h1>Customer Details</h1>

            <p>
                View customer information and order history
            </p>

        </div>

    </section>


    <!-- Customer Details -->
    <section class="content-section">

        <div class="container">

            <!-- Customer Header -->
            <div class="customer-details-header">

                <div>

                    <h2>Ravi Kumar</h2>

                    <p>
                        Customer ID: #1
                    </p>

                </div>

                <span class="status-badge status-completed">
                    Active
                </span>

            </div>


            <!-- Personal Information -->
            <div class="customer-detail-card">

                <h2>Personal Information</h2>

                <div class="customer-info-grid">

                    <div class="customer-info-item">

                        <span>Full Name</span>

                        <strong>
                            Ravi Kumar
                        </strong>

                    </div>


                    <div class="customer-info-item">

                        <span>Email Address</span>

                        <strong>
                            ravi@example.com
                        </strong>

                    </div>


                    <div class="customer-info-item">

                        <span>Phone Number</span>

                        <strong>
                            +91 98765 43210
                        </strong>

                    </div>


                    <div class="customer-info-item">

                        <span>Registered Date</span>

                        <strong>
                            01-10-2026
                        </strong>

                    </div>


                    <div class="customer-info-item">

                        <span>Address</span>

                        <strong>
                            Chennai, Tamil Nadu, India
                        </strong>

                    </div>


                    <div class="customer-info-item">

                        <span>Account Status</span>

                        <strong>
                            Active
                        </strong>

                    </div>

                </div>

            </div>


            <!-- Order Summary -->
            <div class="customer-detail-card">

                <h2>Order Summary</h2>

                <div class="customer-order-summary">

                    <div>

                        <span>Total Orders</span>

                        <strong>2</strong>

                    </div>


                    <div>

                        <span>Completed Orders</span>

                        <strong>1</strong>

                    </div>


                    <div>

                        <span>Processing Orders</span>

                        <strong>1</strong>

                    </div>


                    <div>

                        <span>Total Spent</span>

                        <strong>₹8,350</strong>

                    </div>

                </div>

            </div>


            <!-- Order History -->
            <div class="customer-detail-card">

                <h2>Order History</h2>

                <div class="admin-table">

                    <table>

                        <thead>

                            <tr>

                                <th>Order ID</th>

                                <th>Date</th>

                                <th>Total</th>

                                <th>Payment</th>

                                <th>Status</th>

                                <th>Action</th>

                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td>
                                    <strong>ORD1001</strong>
                                </td>

                                <td>
                                    04-10-2026
                                </td>

                                <td>
                                    ₹5,850
                                </td>

                                <td>
                                    Pending
                                </td>

                                <td>

                                    <span class="status-badge status-processing">
                                        Processing
                                    </span>

                                </td>

                                <td>

                                    <a href="order-details.php"
                                       class="admin-action">

                                        View Order

                                    </a>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>ORD1000</strong>
                                </td>

                                <td>
                                    28-09-2026
                                </td>

                                <td>
                                    ₹2,500
                                </td>

                                <td>
                                    Confirmed
                                </td>

                                <td>

                                    <span class="status-badge status-completed">
                                        Completed
                                    </span>

                                </td>

                                <td>

                                    <a href="order-details.php"
                                       class="admin-action">

                                        View Order

                                    </a>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            <!-- Actions -->
            <div class="customer-details-actions">

                <a href="customers.php"
                   class="admin-back-button">

                    ← Back to Customers

                </a>

            </div>

        </div>

    </section>

</main>


<?php

include 'admin-footer.php';

?>