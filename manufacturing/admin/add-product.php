<?php
include 'admin-header.php';
?>

<main>

    <section class="page-header">

        <div class="container">

            <h1>Add New Product</h1>

            <p>
                Add a new product to the manufacturing website
            </p>

        </div>

    </section>


    <section class="content-section">

        <div class="container">

            <div class="admin-form-box">

                <h2>Product Information</h2>

                <form action="#" method="post">

                    <div class="form-group">

                        <label for="product_name">
                            Product Name
                        </label>

                        <input
                            type="text"
                            id="product_name"
                            name="product_name"
                            placeholder="Enter product name"
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

                            <option value="">
                                Select Category
                            </option>

                            <option value="Garments & Uniforms">
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
                            placeholder="Enter product description"
                        ></textarea>

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
                                step="0.01"
                                placeholder="Enter price"
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
                                placeholder="Enter stock quantity"
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
                            placeholder="Example: images/product.jpg"
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

                            <option value="active">
                                Active
                            </option>

                            <option value="inactive">
                                Inactive
                            </option>

                        </select>

                    </div>


                    <div class="form-actions">

                        <button type="submit">
                            Save Product
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