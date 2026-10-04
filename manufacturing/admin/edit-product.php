<?php

include 'admin-header.php';

$product_id = isset($_GET['id']) ? $_GET['id'] : 1;

?>

<main>

    <section class="page-header">

        <div class="container">

            <h1>Edit Product</h1>

            <p>
                Update product information
            </p>

        </div>

    </section>


    <section class="content-section">

        <div class="container">

            <div class="admin-form-box">

                <h2>Edit Product #<?php echo htmlspecialchars($product_id); ?></h2>


                <form action="#" method="post">


                    <div class="form-group">

                        <label for="product_name">
                            Product Name
                        </label>

                        <input
                            type="text"
                            id="product_name"
                            name="product_name"
                            value="Industrial Uniform"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="category">
                            Category
                        </label>

                        <select
                            id="category"
                            name="category"
                            required
                        >

                            <option value="Garments & Uniforms" selected>
                                Garments & Uniforms
                            </option>

                            <option value="Fire & Safety">
                                Fire & Safety
                            </option>

                            <option value="Water Management">
                                Water Management
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="description">
                            Description
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            rows="5"
                        >High-quality industrial uniform suitable for manufacturing and industrial workplaces.</textarea>

                    </div>


                    <div class="form-row">

                        <div class="form-group">

                            <label for="price">
                                Price
                            </label>

                            <input
                                type="number"
                                id="price"
                                name="price"
                                value="850"
                                step="0.01"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label for="stock">
                                Stock
                            </label>

                            <input
                                type="number"
                                id="stock"
                                name="stock"
                                value="100"
                                required
                            >

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="image">
                            Product Image
                        </label>

                        <input
                            type="text"
                            id="image"
                            name="image"
                            value="images/industrial-uniform.jpg"
                        >

                    </div>


                    <div class="form-group">

                        <label for="status">
                            Status
                        </label>

                        <select
                            id="status"
                            name="status"
                        >

                            <option value="active" selected>
                                Active
                            </option>

                            <option value="inactive">
                                Inactive
                            </option>

                        </select>

                    </div>


                    <div class="form-actions">

                        <button type="submit">
                            Update Product
                        </button>

                        <a href="products.php">
                            Cancel
                        </a>

                    </div>


                </form>

            </div>

        </div>

    </section>

</main>


<?php

include 'admin-footer.php';

?>