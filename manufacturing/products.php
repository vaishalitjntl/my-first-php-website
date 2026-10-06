<?php
include 'includes/header.php';
?>

<main>

    <!-- Page Header -->
    <section class="page-header products-page-header">
        <div class="container">

            <span class="products-label">
                OUR PRODUCTS
            </span>

            <h1>Products & Solutions</h1>

            <p>
                Explore our range of manufacturing products and
                solutions designed for different business requirements.
            </p>

        </div>
    </section>


    <!-- Products -->
    <section class="content-section">

        <div class="container">

            <!-- Search / Filter -->
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

                        <option value="Garments">
                            Garments & Uniforms
                        </option>

                        <option value="Fire">
                            Fire & Safety
                        </option>

                        <option value="Water">
                            Water Management
                        </option>

                    </select>

                </div>

            </div>


            <!-- Product Grid -->
            <div class="products-grid">


                <!-- Product 1 -->
                <div
                    class="product-item"
                    data-category="Garments"
                    data-name="Industrial Uniform"
                >

                    <div class="product-image">

                        <div class="product-icon">
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
                            Quality industrial uniforms suitable
                            for organizations and workplaces.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹850
                            </span>

                            <a
                                href="product-details.php"
                                class="product-btn"
                            >
                                View Product
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Product 2 -->
                <div
                    class="product-item"
                    data-category="Garments"
                    data-name="Corporate Uniform"
                >

                    <div class="product-image">

                        <div class="product-icon">
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
                            Professional corporate uniforms designed
                            for offices and organizations.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹750
                            </span>

                            <a
                                href="product-details.php"
                                class="product-btn"
                            >
                                View Product
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Product 3 -->
                <div
                    class="product-item"
                    data-category="Fire"
                    data-name="Fire Safety Equipment"
                >

                    <div class="product-image">

                        <div class="product-icon">
                            🧯
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
                            Fire protection equipment designed for
                            workplace safety requirements.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹2,500
                            </span>

                            <a
                                href="product-details.php"
                                class="product-btn"
                            >
                                View Product
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Product 4 -->
                <div
                    class="product-item"
                    data-category="Fire"
                    data-name="Industrial Safety Helmet"
                >

                    <div class="product-image">

                        <div class="product-icon">
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
                            Protective industrial safety helmet for
                            workplace environments.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹450
                            </span>

                            <a
                                href="product-details.php"
                                class="product-btn"
                            >
                                View Product
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Product 5 -->
                <div
                    class="product-item"
                    data-category="Water"
                    data-name="Water Management System"
                >

                    <div class="product-image">

                        <div class="product-icon">
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
                            Solutions designed to support efficient
                            water management requirements.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹5,000
                            </span>

                            <a
                                href="product-details.php"
                                class="product-btn"
                            >
                                View Product
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Product 6 -->
                <div
                    class="product-item"
                    data-category="Water"
                    data-name="Water Storage Solution"
                >

                    <div class="product-image">

                        <div class="product-icon">
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
                            Practical water storage solutions for
                            business and industrial requirements.
                        </p>

                        <div class="product-bottom">

                            <span class="product-price">
                                ₹3,500
                            </span>

                            <a
                                href="product-details.php"
                                class="product-btn"
                            >
                                View Product
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