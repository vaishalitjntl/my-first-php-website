<?php
include 'includes/header.php';
?>

<section class="confirmation-page">

    <div class="confirmation-container">

        <div class="success-icon">
            ✓
        </div>

        <h1>Order Placed Successfully!</h1>

        <p class="success-message">
            Thank you for your order. Your order has been received successfully.
        </p>

        <div id="orderDetails">

            <!-- Order details will appear here -->

        </div>

        <div class="confirmation-actions">

            <a href="track-order.php" class="track-order-btn">
                Track Your Order
            </a>

            <a href="products.php" class="continue-shopping-btn">
                Continue Shopping
            </a>

        </div>

    </div>

</section>


<script>

document.addEventListener("DOMContentLoaded", function () {

    const orderData =
        JSON.parse(
            localStorage.getItem("latestOrder")
        );

    const orderDetails =
        document.getElementById("orderDetails");


    if (!orderData) {

        orderDetails.innerHTML = `

            <div class="no-order">

                <h2>No Order Found</h2>

                <p>
                    We could not find your recent order.
                </p>

                <a href="products.php">
                    Go to Products
                </a>

            </div>

        `;

        return;
    }


    let productsHTML = "";


    orderData.items.forEach(function (item) {

        const itemTotal =
            item.price * item.quantity;


        productsHTML += `

            <div class="confirmation-product">

                <div>

                    <h3>${item.name}</h3>

                    <p>
                        Quantity: ${item.quantity}
                    </p>

                </div>

                <strong>
                    ₹${itemTotal.toLocaleString('en-IN')}
                </strong>

            </div>

        `;

    });


    orderDetails.innerHTML = `

        <div class="order-info">

            <div class="order-info-row">

                <span>Order ID</span>

                <strong>
                    ${orderData.orderId}
                </strong>

            </div>


            <div class="order-info-row">

                <span>Order Date</span>

                <strong>
                    ${orderData.orderDate}
                </strong>

            </div>


            <div class="order-info-row">

                <span>Customer</span>

                <strong>
                    ${orderData.customerName}
                </strong>

            </div>


            <div class="order-info-row">

                <span>Phone</span>

                <strong>
                    ${orderData.customerPhone}
                </strong>

            </div>


            <div class="order-info-row">

                <span>Payment Method</span>

                <strong>
                    ${orderData.payment}
                </strong>

            </div>

        </div>


        <div class="ordered-products">

            <h2>Ordered Products</h2>

            ${productsHTML}

        </div>


        <div class="delivery-info">

            <h2>Delivery Address</h2>

            <p>
                ${orderData.address}
            </p>

            <p>
                ${orderData.city} -
                ${orderData.pincode}
            </p>

        </div>


        <div class="order-total">

            <span>Order Total</span>

            <strong>
                ₹${orderData.total.toLocaleString('en-IN')}
            </strong>

        </div>

    `;

});

</script>


<?php
include 'includes/footer.php';
?>