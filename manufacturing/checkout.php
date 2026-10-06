<?php
include 'includes/header.php';
?>

<main>

    <!-- Page Header -->
    <section class="page-header checkout-page-header">

        <div class="container">

            <span class="checkout-label">
                ORDER CHECKOUT
            </span>

            <h1>
                Checkout
            </h1>

            <p>
                Enter your details and review your order before confirmation.
            </p>

        </div>

    </section>


    <!-- Checkout Section -->
    <section class="content-section">

        <div class="container">

            <div class="checkout-layout">


                <!-- Customer Details -->
                <div class="checkout-card">

                    <div class="checkout-section-title">

                        <span class="section-label">
                            CUSTOMER INFORMATION
                        </span>

                        <h2>
                            Delivery Details
                        </h2>

                    </div>


                    <form>

                        <div class="checkout-form-grid">

                            <div class="form-group">

                                <label for="name">
                                    Full Name
                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Enter your full name"
                                >

                            </div>


                            <div class="form-group">

                                <label for="phone">
                                    Phone Number
                                </label>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    placeholder="Enter your phone number"
                                >

                            </div>


                            <div class="form-group">

                                <label for="email">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email address"
                                >

                            </div>


                            <div class="form-group">

                                <label for="company">
                                    Company Name
                                </label>

                                <input
                                    type="text"
                                    id="company"
                                    name="company"
                                    placeholder="Enter company name"
                                >

                            </div>

                        </div>


                        <div class="form-group">

                            <label for="address">
                                Delivery Address
                            </label>

                            <textarea
                                id="address"
                                name="address"
                                rows="4"
                                placeholder="Enter complete delivery address"
                            ></textarea>

                        </div>


                        <div class="checkout-form-grid">

                            <div class="form-group">

                                <label for="city">
                                    City
                                </label>

                                <input
                                    type="text"
                                    id="city"
                                    name="city"
                                    placeholder="Enter city"
                                >

                            </div>


                            <div class="form-group">

                                <label for="pincode">
                                    Pincode
                                </label>

                                <input
                                    type="text"
                                    id="pincode"
                                    name="pincode"
                                    placeholder="Enter pincode"
                                >

                            </div>

                        </div>


                        <div class="checkout-divider"></div>


                        <div class="checkout-section-title">

                            <span class="section-label">
                                PAYMENT METHOD
                            </span>

                            <h2>
                                Choose Payment
                            </h2>

                        </div>


                        <div class="payment-options">

                            <label class="payment-option">

                                <input
                                    type="radio"
                                    name="payment"
                                    value="cash"
                                    checked
                                >

                                <div>

                                    <strong>
                                        Cash / Offline Payment
                                    </strong>

                                    <span>
                                        Payment can be completed during order processing.
                                    </span>

                                </div>

                            </label>


                            <label class="payment-option">

                                <input
                                    type="radio"
                                    name="payment"
                                    value="online"
                                >

                                <div>

                                    <strong>
                                        Online Payment
                                    </strong>

                                    <span>
                                        Proceed with online payment after order confirmation.
                                    </span>

                                </div>

                            </label>

                        </div>


                        <button
                            type="button"
                            class="checkout-place-order"
                        >
                            Place Order →
                        </button>

                    </form>

                </div>


                <!-- Order Summary -->
                <div class="checkout-card checkout-summary-card">

                    <span class="section-label">
                        YOUR ORDER
                    </span>

                    <h2>
                        Order Summary
                    </h2>


                    <div class="checkout-product">

                        <div class="checkout-product-icon">
                            👕
                        </div>

                        <div>

                            <strong>
                                Industrial Uniform
                            </strong>

                            <span>
                                Qty: 5 × ₹850
                            </span>

                        </div>

                        <strong>
                            ₹4,250
                        </strong>

                    </div>


                    <div class="checkout-product">

                        <div class="checkout-product-icon">
                            ⛑️
                        </div>

                        <div>

                            <strong>
                                Industrial Safety Helmet
                            </strong>

                            <span>
                                Qty: 2 × ₹450
                            </span>

                        </div>

                        <strong>
                            ₹900
                        </strong>

                    </div>


                    <div class="summary-divider"></div>


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


                    <div class="summary-total">

                        <span>
                            Total Amount
                        </span>

                        <strong>
                            ₹5,150
                        </strong>

                    </div>


                    <div class="checkout-security">

                        <strong>
                            ✓ Secure Order Process
                        </strong>

                        <p>
                            Your order details will be reviewed before final confirmation.
                        </p>

                    </div>


                    <a
                        href="cart.php"
                        class="checkout-back"
                    >
                        ← Back to Cart
                    </a>

                </div>

            </div>

        </div>

    </section>

</main>

<?php
include 'includes/footer.php';
?>