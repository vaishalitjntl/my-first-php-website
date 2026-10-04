<?php

include '../includes/db.php';
include 'admin-header.php';

?>

<main>

    <section class="page-header">

        <div class="container">

            <h1>Manage Products</h1>

            <p>
                Manage products available on the website
            </p>

        </div>

    </section>


    <section class="content-section">

        <div class="container">

            <div class="admin-page-header">

                <div>

                    <h2>Products</h2>

                    <p>
                        Add, edit and manage your products.
                    </p>

                </div>


                <a href="add-product.php">
                    Add New Product
                </a>

            </div>


            <div class="admin-table">

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Product Name</th>

                            <th>Category</th>

                            <th>Price</th>

                            <th>Stock</th>

                            <th>Status</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>

                    <?php

                    $sql = "SELECT * FROM products ORDER BY id ASC";

                    $result = $conn->query($sql);


                    if ($result && $result->num_rows > 0) {

                        while ($product = $result->fetch_assoc()) {

                    ?>

                        <tr>

                            <td>
                                <?php echo htmlspecialchars($product['id']); ?>
                            </td>


                            <td>
                                <?php echo htmlspecialchars($product['name']); ?>
                            </td>


                            <td>
                                <?php echo htmlspecialchars($product['category']); ?>
                            </td>


                            <td>
                                ₹<?php echo htmlspecialchars($product['price']); ?>
                            </td>


                            <td>
                                <?php echo htmlspecialchars($product['stock']); ?>
                            </td>


                            <td>

                                <?php if ($product['status'] === 'active') { ?>

                                    <span class="status-badge status-completed">
                                        Active
                                    </span>

                                <?php } else { ?>

                                    <span class="status-badge status-cancelled">
                                        Inactive
                                    </span>

                                <?php } ?>

                            </td>


                            <td>

                                <a href="edit-product.php?id=<?php echo $product['id']; ?>">
                                    Edit
                                </a>

                                |

                                <a href="#">
                                    Delete
                                </a>

                            </td>

                        </tr>


                    <?php

                        }

                    } else {

                    ?>

                        <tr>

                            <td colspan="7">

                                No products found.

                            </td>

                        </tr>

                    <?php

                    }

                    ?>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

</main>


<?php

include 'admin-footer.php';

?>