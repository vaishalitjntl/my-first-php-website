<?php
include 'includes/header.php';
?>

<section class="checkout-page">

    <div class="page-header">
        <h1>Checkout</h1>
        <p>Complete your details to place your order</p>
    </div>

    <div class="checkout-container">

        <!-- Customer Details -->
        <div class="checkout-form">

            <h2>Customer Information</h2>

            <form id="checkoutForm">

                <div class="form-group">
                    <label for="customerName">Full Name</label>
                    <input
                        type="text"
                        id="customerName"
                        name="customerName"
                        placeholder="Enter your full name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="customerEmail">Email Address</label>
                    <input
                        type="email"
                        id="customerEmail"
                        name="customerEmail"
                        placeholder="Enter your email"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="customerPhone">Phone Number</label>
                    <input
                        type="tel"
                        id="customerPhone"
                        name="customerPhone"
                        placeholder="Enter your phone number"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="companyName">Company / Organization</label>
                    <input
                        type="text"
                        id="companyName"
                        name="companyName"
                        placeholder="Enter company name"
                    >
                </div>

                <div class="form-group">
                    <label for="address">Delivery Address</label>
                    <textarea
                        id="address"
                        name="address"
                        rows="4"
                        placeholder="Enter complete delivery address"
                        required
                    ></textarea>
                </div>

                <div class="form-row">

                    <div class="form-group">
                        <label for="city">City</label>
                        <input
                            type="text"
                            id="city"
                            name="city"
                            placeholder="City"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="pincode">PIN Code</label>
                        <input
                            type="text"
                            id="pincode"
                            name="pincode"
                            placeholder="PIN Code"
                            required
                        >
                    </div>

                </div>

                <div class="form-group">
                    <label for="notes">Additional Notes</label>
                    <textarea
                        id="notes"
                        name="notes"
                        rows="3"
                        placeholder="Any additional requirements..."
                    ></textarea>
                </div>

                <h2>Payment Method</h2>

                <div class="payment-options">

                    <label class="payment-option">
                        <input
                            type="radio"
                            name="payment"
                            value="Cash on Delivery"
                            checked
                        >
                        <span>Cash on Delivery</span>
                    </label>

                    <label class="payment-option">
                        <input
                            type="radio"
                            name="payment"
                            value="Bank Transfer"
                        >
                        <span>Bank Transfer</span>
                    </label>

                    <label class="payment-option">
                        <input
                            type="radio"
                            name="payment"
                            value="Contact for Payment"
                        >
                        <span>Contact for Payment</span>
                    </label>

                </div>

                <button type="submit" class="place-order-btn">
                    Place Order
                </button>

            </form>

        </div>


        <!-- Order Summary -->
        <div class="checkout-summary">

            <h2>Order Summary</h2>

            <div id="checkoutItems"></div>

            <div class="summary-line">
                <span>Total Items</span>
                <strong id="checkoutTotalItems">0</strong>
            </div>

            <div class="summary-line">
                <span>Subtotal</span>
                <strong id="checkoutSubtotal">₹0</strong>
            </div>

            <div class="summary-line">
                <span>Delivery</span>
                <strong>To be confirmed</strong>
            </div>

            <div class="summary-total">
                <span>Estimated Total</span>
                <strong id="checkoutTotal">₹0</strong>
            </div>

        </div>

    </div>

</section>


<script>

document.addEventListener("DOMContentLoaded", function () {

    const cart = JSON.parse(
        localStorage.getItem("manufacturingCart")
    ) || [];

    const checkoutItems =
        document.getElementById("checkoutItems");

    const totalItems =
        document.getElementById("checkoutTotalItems");

    const subtotal =
        document.getElementById("checkoutSubtotal");

    const total =
        document.getElementById("checkoutTotal");

    if (cart.length === 0) {

        checkoutItems.innerHTML = `
            <div class="empty-checkout">
                <p>Your cart is empty.</p>
                <a href="products.php">Continue Shopping</a>
            </div>
        `;

        return;
    }

    let itemCount = 0;
    let subtotalAmount = 0;

    cart.forEach(function (item) {

        const itemTotal =
            item.price * item.quantity;

        itemCount += item.quantity;
        subtotalAmount += itemTotal;

        checkoutItems.innerHTML += `

            <div class="checkout-item">

                <div>
                    <h3>${item.name}</h3>
                    <p>
                        ₹${item.price} × ${item.quantity}
                    </p>
                </div>

                <strong>
                    ₹${itemTotal.toLocaleString('en-IN')}
                </strong>

            </div>

        `;
    });

    totalItems.textContent = itemCount;

    subtotal.textContent =
        "₹" + subtotalAmount.toLocaleString('en-IN');

    total.textContent =
        "₹" + subtotalAmount.toLocaleString('en-IN');


    document
        .getElementById("checkoutForm")
        .addEventListener("submit", function (event) {

            event.preventDefault();

            const customerName =
                document.getElementById("customerName").value;

            const customerEmail =
                document.getElementById("customerEmail").value;

            const customerPhone =
                document.getElementById("customerPhone").value;

            const address =
                document.getElementById("address").value;

            const city =
                document.getElementById("city").value;

            const pincode =
                document.getElementById("pincode").value;

            const payment =
                document.querySelector(
                    'input[name="payment"]:checked'
                ).value;


            const order = {

                orderId:
                    "ORD" + Date.now(),

                customerName:
                    customerName,

                customerEmail:
                    customerEmail,

                customerPhone:
                    customerPhone,

                companyName:
                    document.getElementById("companyName").value,

                address:
                    address,

                city:
                    city,

                pincode:
                    pincode,

                notes:
                    document.getElementById("notes").value,

                payment:
                    payment,

                items:
                    cart,

                total:
                    subtotalAmount,

                orderDate:
                    new Date().toLocaleString()

            };


            localStorage.setItem(
                "latestOrder",
                JSON.stringify(order)
            );

            localStorage.removeItem(
                "manufacturingCart"
            );


            window.location.href =
                "order-confirmation.php";

        });

});

</script>


<?php
include 'includes/footer.php';
?>