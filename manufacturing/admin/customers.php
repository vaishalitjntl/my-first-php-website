<?php

include 'admin-header.php';

?>

<main>

    <!-- Page Header -->
    <section class="page-header">

        <div class="container">

            <h1>Manage Customers</h1>

            <p>
                View and manage registered customers
            </p>

        </div>

    </section>


    <!-- Customers Section -->
    <section class="content-section">

        <div class="container">

            <div class="admin-page-header">

                <div>

                    <h2>Customers</h2>

                    <p>
                        View customer information and account details.
                    </p>

                </div>

            </div>


            <!-- Customer Summary -->
            <div class="customer-summary">

                <div class="customer-summary-card">

                    <span>Total Customers</span>

                    <strong>3</strong>

                </div>


                <div class="customer-summary-card">

                    <span>Active Customers</span>

                    <strong>2</strong>

                </div>


                <div class="customer-summary-card">

                    <span>Inactive Customers</span>

                    <strong>1</strong>

                </div>

            </div>


            <!-- Customers Table -->
            <div class="admin-table">

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Customer Name</th>

                            <th>Email</th>

                            <th>Phone</th>

                            <th>Registered Date</th>

                            <th>Status</th>

                            <th>Action</th>

                        </tr>

                    </thead>


                    <tbody>


                        <!-- Customer 1 -->
                        <tr>

                            <td>
                                <strong>1</strong>
                            </td>

                            <td>
                                Ravi Kumar
                            </td>

                            <td>
                                ravi@example.com
                            </td>

                            <td>
                                9876543210
                            </td>

                            <td>
                                01-10-2026
                            </td>

                            <td>

                                <span class="status-badge status-completed">
                                    Active
                                </span>

                            </td>

                            <td>

                                <a href="customer-details.php" class="admin-action">
                                    View Customer
                                </a>

                            </td>

                        </tr>


                        <!-- Customer 2 -->
                        <tr>

                            <td>
                                <strong>2</strong>
                            </td>

                            <td>
                                Priya
                            </td>

                            <td>
                                priya@example.com
                            </td>

                            <td>
                                9876543211
                            </td>

                            <td>
                                02-10-2026
                            </td>

                            <td>

                                <span class="status-badge status-completed">
                                    Active
                                </span>

                            </td>

                            <td>

                                <a href="customer-details.php" class="admin-action">
                                    View Customer
                                </a>

                            </td>

                        </tr>


                        <!-- Customer 3 -->
                        <tr>

                            <td>
                                <strong>3</strong>
                            </td>

                            <td>
                                Arun
                            </td>

                            <td>
                                arun@example.com
                            </td>

                            <td>
                                9876543212
                            </td>

                            <td>
                                03-10-2026
                            </td>

                            <td>

                                <span class="status-badge status-pending">
                                    Inactive
                                </span>

                            </td>

                            <td>

                                <a href="customer-details.php" class="admin-action">

                                    View Customer
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