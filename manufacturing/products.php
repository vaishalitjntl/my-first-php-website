<?php
include 'includes/header.php';
?>

<main>

    <!-- PAGE HEADER -->

    <section class="page-header">

        <div class="container">

            <p class="section-label">
                OUR PRODUCTS
            </p>

            <h1>
                Products & Solutions
            </h1>

            <p>
                Explore our range of products and find the
                right solution for your requirements.
            </p>

        </div>

    </section>


    <!-- PRODUCTS -->

    <section class="products-list-section">

        <div class="container">

            <!-- SEARCH AND FILTER -->

            <div class="product-tools">

                <div class="search-box">

                    <input
                        type="text"
                        id="productSearch"
                        placeholder="Search products..."
                    >

                </div>

                <div class="category-filter">

                    <select id="categoryFilter">

                        <option value="all">
                            All Categories
                        </option>

                        <option value="garments">
                            Garments & Uniforms
                        </option>

                        <option value="fire">
                            Fire & Safety
                        </option>

                        <option value="water">
                            Water Management
                        </option>

                    </select>

                </div>

            </div>


            <!-- PRODUCT GRID -->

            <div class="products-grid">


                <!-- PRODUCT 1 -->

                <div class="product-item"
                     data-category="garments"
                     data-name="Industrial Uniform">

                    <div class="product-image">

                        <img
                            src="images/industrial-uniform.jpg"
                            alt="Industrial Uniform"
                            onerror="this.style.display='none';"
                        >

                        <div class="image-placeholder">
                            👕
                        </div>

                    </div>

                    <div class="product-info">

                        <span class="product-category">
                            Garments & Uniforms
                        </span>

                        <h3>
                            Industrial Uniform
                        </h3>

                        <p>
                            Durable and comfortable uniforms
                            designed for industrial workplaces.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹ Contact
                            </span>

                            <a
                                href="product-details.php?id=1"
                                class="product-btn">
                                View Details
                            </a>

                        </div>

                    </div>

                </div>


                <!-- PRODUCT 2 -->

                <div class="product-item"
                     data-category="garments"
                     data-name="Corporate Uniform">

                    <div class="product-image">

                        <img
                            src="images/corporate-uniform.jpg"
                            alt="Corporate Uniform"
                            onerror="this.style.display='none';"
                        >

                        <div class="image-placeholder">
                            👔
                        </div>

                    </div>

                    <div class="product-info">

                        <span class="product-category">
                            Garments & Uniforms
                        </span>

                        <h3>
                            Corporate Uniform
                        </h3>

                        <p>
                            Professional uniform solutions
                            for offices and organizations.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹ Contact
                            </span>

                            <a
                                href="product-details.php?id=2"
                                class="product-btn">
                                View Details
                            </a>

                        </div>

                    </div>

                </div>


                <!-- PRODUCT 3 -->

                <div class="product-item"
                     data-category="fire"
                     data-name="Fire Safety Equipment">

                    <div class="product-image">

                        <img
                            src="images/fire-safety.jpg"
                            alt="Fire Safety Equipment"
                            onerror="this.style.display='none';"
                        >

                        <div class="image-placeholder">
                            🔥
                        </div>

                    </div>

                    <div class="product-info">

                        <span class="product-category">
                            Fire & Safety
                        </span>

                        <h3>
                            Fire Safety Equipment
                        </h3>

                        <p>
                            Fire protection and workplace
                            safety equipment.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹ Contact
                            </span>

                            <a
                                href="product-details.php?id=3"
                                class="product-btn">
                                View Details
                            </a>

                        </div>

                    </div>

                </div>


                <!-- PRODUCT 4 -->

                <div class="product-item"
                     data-category="fire"
                     data-name="Safety Helmet">

                    <div class="product-image">

                        <img
                            src="images/safety-helmet.jpg"
                            alt="Safety Helmet"
                            onerror="this.style.display='none';"
                        >

                        <div class="image-placeholder">
                            ⛑️
                        </div>

                    </div>

                    <div class="product-info">

                        <span class="product-category">
                            Fire & Safety
                        </span>

                        <h3>
                            Industrial Safety Helmet
                        </h3>

                        <p>
                            Protective safety helmets for
                            industrial environments.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹ Contact
                            </span>

                            <a
                                href="product-details.php?id=4"
                                class="product-btn">
                                View Details
                            </a>

                        </div>

                    </div>

                </div>


                <!-- PRODUCT 5 -->

                <div class="product-item"
                     data-category="water"
                     data-name="Water Management System">

                    <div class="product-image">

                        <img
                            src="images/water-management.jpg"
                            alt="Water Management System"
                            onerror="this.style.display='none';"
                        >

                        <div class="image-placeholder">
                            💧
                        </div>

                    </div>

                    <div class="product-info">

                        <span class="product-category">
                            Water Management
                        </span>

                        <h3>
                            Water Management System
                        </h3>

                        <p>
                            Solutions designed to support
                            efficient water management.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹ Contact
                            </span>

                            <a
                                href="product-details.php?id=5"
                                class="product-btn">
                                View Details
                            </a>

                        </div>

                    </div>

                </div>


                <!-- PRODUCT 6 -->

                <div class="product-item"
                     data-category="water"
                     data-name="Water Storage Solution">

                    <div class="product-image">

                        <img
                            src="images/water-storage.jpg"
                            alt="Water Storage Solution"
                            onerror="this.style.display='none';"
                        >

                        <div class="image-placeholder">
                            🚰
                        </div>

                    </div>

                    <div class="product-info">

                        <span class="product-category">
                            Water Management
                        </span>

                        <h3>
                            Water Storage Solution
                        </h3>

                        <p>
                            Practical solutions for water
                            storage and management requirements.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹ Contact
                            </span>

                            <a
                                href="product-details.php?id=6"
                                class="product-btn">
                                View Details
                            </a>

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </section>

</main>


<?php
include 'includes/footer.php';
?>