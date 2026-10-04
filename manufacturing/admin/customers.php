<?php

include 'admin-header.php';

?>

<main>

    <section class="page-header">

        <div class="container">

            <h1>Manage Customers</h1>

            <p>
                View and manage registered customers
            </p>

        </div>

    </section>


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

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                1
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

                                <a href="#">
                                    View
                                </a>

                            </td>

                        </tr>


                        <tr>

                            <td>
                                2
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

                                <a href="#">
                                    View
                                </a>

                            </td>

                        </tr>


                        <tr>

                            <td>
                                3
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