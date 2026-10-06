<?php
include 'includes/header.php';
?>

<main>

    <section class="page-header cart-page-header">

        <div class="container">

            <span class="cart-label">
                SHOPPING CART
            </span>

            <h1>Your Cart</h1>

            <p>
                Review your selected products before proceeding
                to checkout.
            </p>

        </div>

    </section>


    <section class="content-section">

        <div class="container">

            <div class="cart-layout">

                <!-- Cart Items -->
                <div class="cart-card">

                    <div class="cart-heading">

                        <div>

                            <span class="section-label">
                                SELECTED PRODUCTS
                            </span>

                            <h2>
                                Your Items
                            </h2>

                        </div>

                        <span class="cart-count">
                            2 Items
                        </span>

                    </div>


                    <!-- Cart Item 1 -->
                    <div class="cart-item">

                        <div class="cart-product">

                            <div class="cart-product-icon">
                                👕
                            </div>

                            <div>

                                <span class="cart-category">
                                    Garments & Uniforms
                                </span>

                                <h3>
                                    Industrial Uniform
                                </h3>

                                <p>
                                    ₹850 per item
                                </p>

                            </div>

                        </div>


                        <div class="cart-quantity">

                            <label>
                                Qty
                            </label>

                            <input
                                type="number"
                                value="5"
                                min="1"
                            >

                        </div>


                        <div class="cart-item-price">
                            ₹4,250
                        </div>


                        <a
                            href="#"
                            class="cart-remove"
                        >
                            Remove
                        </a>

                    </div>


                    <!-- Cart Item 2 -->
                    <div class="cart-item">

                        <div class="cart-product">

                            <div class="cart-product-icon">
                                ⛑️
                            </div>

                            <div>

                                <span class="cart-category">
                                    Fire & Safety
                                </span>

                                <h3>
                                    Industrial Safety Helmet
                                </h3>

                                <p>
                                    ₹450 per item
                                </p>

                            </div>

                        </div>


                        <div class="cart-quantity">

                            <label>
                                Qty
                            </label>

                            <input
                                type="number"
                                value="2"
                                min="1"
                            >

                        </div>


                        <div class="cart-item-price">
                            ₹900
                        </div>


                        <a
                            href="#"
                            class="cart-remove"
                        >
                            Remove
                        </a>

                    </div>


                    <div class="cart-actions">

                        <a
                            href="products.php"
                            class="cart-continue"
                        >
                            ← Continue Shopping
                        </a>

                    </div>

                </div>


                <!-- Cart Summary -->
                <div class="cart-card cart-summary-card">

                    <span class="section-label">
                        ORDER SUMMARY
                    </span>

                    <h2>
                        Cart Summary
                    </h2>


                    <div class="summary-row">

                        <span>
                            Subtotal
                        </span>

                        <strong>
                            ₹5,150
                        </strong>

                    </div>


                    <div class="summary-row">

                        <span>
                            Delivery
                        </span>

                        <strong>
                            ₹0
                        </strong>

                    </div>


                    <div class="summary-divider"></div>


                    <div class="summary-total">

                        <span>
                            Total
                        </span>

                        <strong>
                            ₹5,150
                        </strong>

                    </div>


                    <a
                        href="checkout.php"
                        class="cart-checkout-button"
                    >
                        Proceed to Checkout →
                    </a>


                    <div class="cart-note">

                        <strong>
                            Secure Ordering
                        </strong>

                        <p>
                            Your order details will be reviewed
                            before final confirmation.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php
include 'includes/footer.php';
?>