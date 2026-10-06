<?php
include 'includes/header.php';
?>

<main>

    <section class="page-header product-details-header">
        <div class="container">

            <span class="product-details-label">
                PRODUCT DETAILS
            </span>

            <h1>Industrial Uniform</h1>

            <p>
                Quality industrial uniform designed for workplace
                and business requirements.
            </p>

        </div>
    </section>


    <section class="content-section">

        <div class="container">

            <div class="product-detail">

                <!-- Product Image -->
                <div class="product-detail-image">

                    <div class="product-detail-icon">
                        👕
                    </div>

                </div>


                <!-- Product Information -->
                <div class="product-detail-content">

                    <span class="product-category">
                        Garments & Uniforms
                    </span>

                    <h1>
                        Industrial Uniform
                    </h1>

                    <div class="product-detail-price">
                        ₹850
                    </div>

                    <div class="product-availability">
                        <span class="availability-dot"></span>
                        In Stock
                    </div>

                    <p class="product-detail-description">
                        Quality industrial uniforms suitable for
                        organizations, businesses and workplace
                        environments.
                    </p>


                    <div class="product-specifications">

                        <div>
                            <span>Product Category</span>
                            <strong>Garments & Uniforms</strong>
                        </div>

                        <div>
                            <span>Availability</span>
                            <strong>Available</strong>
                        </div>

                        <div>
                            <span>Product Type</span>
                            <strong>Industrial Uniform</strong>
                        </div>

                    </div>


                    <div class="product-quantity">

                        <label for="quantity">
                            Quantity
                        </label>

                        <input
                            type="number"
                            id="quantity"
                            name="quantity"
                            value="1"
                            min="1"
                        >

                    </div>


                    <div class="product-detail-actions">

                        <a
                            href="cart.php"
                            class="product-detail-cart"
                        >
                            Add to Cart
                        </a>

                        <a
                            href="products.php"
                            class="product-detail-back"
                        >
                            ← Back to Products
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Product Information -->
    <section class="product-info-section">

        <div class="container">

            <div class="product-info-box">

                <span class="section-label">
                    PRODUCT INFORMATION
                </span>

                <h2>
                    Designed for Workplace Requirements
                </h2>

                <p>
                    Our industrial uniform solutions are designed
                    for organizations and businesses looking for
                    practical and professional workplace clothing.
                </p>

                <div class="product-benefits">

                    <div>
                        <strong>01</strong>
                        <span>Professional Appearance</span>
                    </div>

                    <div>
                        <strong>02</strong>
                        <span>Workplace Suitable</span>
                    </div>

                    <div>
                        <strong>03</strong>
                        <span>Quality Focused</span>
                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php
include 'includes/footer.php';
?>