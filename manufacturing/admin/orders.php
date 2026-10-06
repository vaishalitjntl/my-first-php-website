<?php

include 'admin-header.php';

?>

<main>

    <!-- Page Header -->
    <section class="page-header">

        <div class="container">

            <h1>Manage Orders</h1>

            <p>
                View and manage customer orders
            </p>

        </div>

    </section>


    <!-- Orders Section -->
    <section class="content-section">

        <div class="container">

            <div class="admin-page-header">

                <div>

                    <h2>Orders</h2>

                    <p>
                        Review customer orders and update order status.
                    </p>

                </div>

            </div>


            <!-- Order Summary -->
            <div class="order-summary">

                <div class="order-summary-card">

                    <span>Total Orders</span>

                    <strong>3</strong>

                </div>


                <div class="order-summary-card">

                    <span>Pending</span>

                    <strong>1</strong>

                </div>


                <div class="order-summary-card">

                    <span>Processing</span>

                    <strong>1</strong>

                </div>


                <div class="order-summary-card">

                    <span>Completed</span>

                    <strong>1</strong>

                </div>

            </div>


            <!-- Orders Table -->
            <div class="admin-table">

                <table>

                    <thead>

                        <tr>

                            <th>Order ID</th>

                            <th>Customer</th>

                            <th>Date</th>

                            <th>Total</th>

                            <th>Payment</th>

                            <th>Status</th>

                            <th>Action</th>

                        </tr>

                    </thead>


                    <tbody>


                        <!-- Order 1 -->
                        <tr>

                            <td>
                                <strong>ORD1001</strong>
                            </td>

                            <td>
                                Ravi Kumar
                            </td>

                            <td>
                                04-10-2026
                            </td>

                            <td>
                                ₹5,850
                            </td>

                            <td>

                                <span class="payment-badge payment-pending">
                                    Pending
                                </span>

                            </td>

                            <td>

                                <span class="status-badge status-processing">
                                    Processing
                                </span>

                            </td>

                            <td>

                                <a href="order-details.php" class="admin-action">

                                    View Order
                                </a>

                            </td>

                        </tr>


                        <!-- Order 2 -->
                        <tr>

                            <td>
                                <strong>ORD1002</strong>
                            </td>

                            <td>
                                Priya
                            </td>

                            <td>
                                03-10-2026
                            </td>

                            <td>
                                ₹2,500
                            </td>

                            <td>

                                <span class="payment-badge payment-confirmed">
                                    Confirmed
                                </span>

                            </td>

                            <td>

                                <span class="status-badge status-completed">
                                    Completed
                                </span>

                            </td>

                            <td>

                                <a href="#" class="admin-action">
                                    View Order
                                </a>

                            </td>

                        </tr>


                        <!-- Order 3 -->
                        <tr>

                            <td>
                                <strong>ORD1003</strong>
                            </td>

                            <td>
                                Arun
                            </td>

                            <td>
                                02-10-2026
                            </td>

                            <td>
                                ₹8,500
                            </td>

                            <td>

                                <span class="payment-badge payment-pending">
                                    Pending
                                </span>

                            </td>

                            <td>

                                <span class="status-badge status-pending">
                                    Pending
                                </span>

                            </td>

                            <td>

                                <a href="#" class="admin-action">
                                    View Order
                                </a>

                            </td>

                        </tr>


                    </tbody>

                </table>

            </div>

        </div>

    </section>

</main>


<?php

include 'admin-footer.php';

?>