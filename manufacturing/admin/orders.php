<?php

include 'admin-header.php';

?>

<main>

    <section class="page-header">

        <div class="container">

            <h1>Manage Orders</h1>

            <p>
                View and manage customer orders
            </p>

        </div>

    </section>


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

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                ORD1001
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
                                Pending
                            </td>

                            <td>

                                <span class="status-badge status-processing">
                                    Processing
                                </span>

                            </td>

                            <td>

                                <a href="#">
                                    View
                                </a>

                            </td>

                        </tr>


                        <tr>

                            <td>
                                ORD1002
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
                                Confirmed
                            </td>

                            <td>

                                <span class="status-badge status-completed">
                                    Completed
                                </span>

                            </td>

                            <td>

                                <a href="#">
                                    View
                                </a>

                            </td>

                        </tr>


                        <tr>

                            <td>
                                ORD1003
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
                                Pending
                            </td>

                            <td>

                                <span class="status-badge status-pending">
                                    Pending
                                </span>

                            </td>

                            <td>

                                <a href="#">
                                    View
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