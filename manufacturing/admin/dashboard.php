<?php
include 'admin-header.php';
?>

<main>

    <!-- Page Header -->
    <section class="page-header">

        <div class="container">

            <h1>Admin Dashboard</h1>

            <p>
                Manage your manufacturing website
            </p>

        </div>

    </section>


    <!-- Dashboard -->
    <section class="content-section">

        <div class="container">

            <div class="dashboard-intro">

                <h2>Dashboard</h2>

                <p>
                    Welcome to the Manufacturing Solutions
                    administration panel.
                </p>

            </div>


            <!-- Summary Cards -->
            <div class="dashboard-summary">

                <div class="dashboard-card">

                    <div class="dashboard-card-icon">
                        📦
                    </div>

                    <div>

                        <span>Total Products</span>

                        <strong>6</strong>

                    </div>

                    <a href="products.php">
                        View Products
                    </a>

                </div>


                <div class="dashboard-card">

                    <div class="dashboard-card-icon">
                        🛒
                    </div>

                    <div>

                        <span>Total Orders</span>

                        <strong>3</strong>

                    </div>

                    <a href="orders.php">
                        View Orders
                    </a>

                </div>


                <div class="dashboard-card">

                    <div class="dashboard-card-icon">
                        👥
                    </div>

                    <div>

                        <span>Total Customers</span>

                        <strong>3</strong>

                    </div>

                    <a href="customers.php">
                        View Customers
                    </a>

                </div>


                <div class="dashboard-card">

                    <div class="dashboard-card-icon">
                        ⏳
                    </div>

                    <div>

                        <span>Pending Orders</span>

                        <strong>1</strong>

                    </div>

                    <a href="orders.php">
                        Review Orders
                    </a>

                </div>

            </div>


            <!-- Quick Management -->
            <div class="dashboard-section">

                <h2>Quick Management</h2>

                <div class="admin-menu">


                    <div class="admin-card">

                        <h3>Products</h3>

                        <p>
                            Add, edit and manage products,
                            categories, prices and stock.
                        </p>

                        <a href="products.php">
                            Manage Products
                        </a>

                    </div>


                    <div class="admin-card">

                        <h3>Orders</h3>

                        <p>
                            View customer orders, payment
                            information and order status.
                        </p>

                        <a href="orders.php">
                            Manage Orders
                        </a>

                    </div>


                    <div class="admin-card">

                        <h3>Customers</h3>

                        <p>
                            View registered customers,
                            account information and orders.
                        </p>

                        <a href="customers.php">
                            Manage Customers
                        </a>

                    </div>

                </div>

            </div>


            <!-- Recent Orders -->
            <div class="dashboard-section">

                <div class="dashboard-section-header">

                    <div>

                        <h2>Recent Orders</h2>

                        <p>
                            Latest customer orders
                        </p>

                    </div>

                    <a href="orders.php">
                        View All Orders
                    </a>

                </div>


                <div class="admin-table">

                    <table>

                        <thead>

                            <tr>

                                <th>Order ID</th>

                                <th>Customer</th>

                                <th>Total</th>

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
                                    Ravi Kumar
                                </td>

                                <td>
                                    ₹5,850
                                </td>

                                <td>

                                    <span class="status-badge status-processing">
                                        Processing
                                    </span>

                                </td>

                                <td>

                                    <a href="order-details.php"
                                       class="admin-action">
                                        View
                                    </a>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>ORD1002</strong>
                                </td>

                                <td>
                                    Priya
                                </td>

                                <td>
                                    ₹2,500
                                </td>

                                <td>

                                    <span class="status-badge status-completed">
                                        Completed
                                    </span>

                                </td>

                                <td>

                                    <a href="order-details.php"
                                       class="admin-action">
                                        View
                                    </a>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>ORD1003</strong>
                                </td>

                                <td>
                                    Arun
                                </td>

                                <td>
                                    ₹8,500
                                </td>

                                <td>

                                    <span class="status-badge status-pending">
                                        Pending
                                    </span>

                                </td>

                                <td>

                                    <a href="order-details.php"
                                       class="admin-action">
                                        View
                                    </a>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>

</main>


<?php
include 'admin-footer.php';
?>