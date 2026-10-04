<?php
include 'admin-header.php';
?>

<main>

    <section class="page-header">

        <div class="container">

            <h1>Admin Dashboard</h1>

            <p>
                Manage your manufacturing website
            </p>

        </div>

    </section>


    <section class="content-section">

        <div class="container">

            <h2>Dashboard</h2>

            <p>
                Welcome to the Manufacturing Solutions
                administration panel.
            </p>


            <div class="admin-menu">


                <div class="admin-card">

                    <h3>Products</h3>

                    <p>
                        Add, edit and manage products.
                    </p>

                    <a href="products.php">
                        Manage Products
                    </a>

                </div>


                <div class="admin-card">

                    <h3>Orders</h3>

                    <p>
                        View and manage customer orders.
                    </p>

                    <a href="orders.php">
                        Manage Orders
                    </a>

                </div>


                <div class="admin-card">

                    <h3>Customers</h3>

                    <p>
                        View registered customers.
                    </p>

                    <a href="customers.php">
                        Manage Customers
                    </a>

                </div>


            </div>

        </div>

    </section>

</main>


<?php
include 'admin-footer.php';
?>