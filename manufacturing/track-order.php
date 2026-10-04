<?php
include 'includes/header.php';
?>

<section class="tracking-page">

    <div class="tracking-container">

        <div class="tracking-header">

            <h1>Track Your Order</h1>

            <p>
                Enter your Order ID to check your order status.
            </p>

        </div>


        <!-- Search Order -->

        <div class="tracking-search">

            <input
                type="text"
                id="orderIdInput"
                placeholder="Enter your Order ID"
            >

            <button onclick="trackOrder()">
                Track Order
            </button>

        </div>


        <!-- Tracking Result -->

        <div id="trackingResult">

            <div class="tracking-placeholder">

                <div class="tracking-icon">
                    🔎
                </div>

                <h2>Enter your Order ID</h2>

                <p>
                    Your order status will appear here.
                </p>

            </div>

        </div>

    </div>

</section>


<script>

function trackOrder() {

    const enteredOrderId =
        document.getElementById("orderIdInput")
        .value
        .trim();

    const result =
        document.getElementById("trackingResult");


    if (enteredOrderId === "") {

        result.innerHTML = `

            <div class="tracking-error">

                <h3>Please enter your Order ID</h3>

                <p>
                    Enter the Order ID received after placing your order.
                </p>

            </div>

        `;

        return;
    }


    const orderData =
        JSON.parse(
            localStorage.getItem("latestOrder")
        );


    if (!orderData) {

        result.innerHTML = `

            <div class="tracking-error">

                <h3>Order Not Found</h3>

                <p>
                    We could not find an order.
                </p>

            </div>

        `;

        return;
    }


    if (
        enteredOrderId.toUpperCase()
        !== orderData.orderId.toUpperCase()
    ) {

        result.innerHTML = `

            <div class="tracking-error">

                <h3>Invalid Order ID</h3>

                <p>
                    Please check your Order ID and try again.
                </p>

            </div>

        `;

        return;
    }


    displayTracking(orderData);

}


function displayTracking(order) {

    const result =
        document.getElementById("trackingResult");


    result.innerHTML = `

        <div class="tracking-order-card">

            <div class="tracking-order-header">

                <div>

                    <span>Order ID</span>

                    <h2>
                        ${order.orderId}
                    </h2>

                </div>

                <div class="tracking-date">

                    <span>Order Date</span>

                    <strong>
                        ${order.orderDate}
                    </strong>

                </div>

            </div>


            <!-- Status -->

            <div class="order-status">

                <div class="status-step active">

                    <div class="status-circle">
                        ✓
                    </div>

                    <div class="status-content">

                        <h3>Order Placed</h3>

                        <p>
                            Your order has been received.
                        </p>

                    </div>

                </div>


                <div class="status-line active-line"></div>


                <div class="status-step active">

                    <div class="status-circle">
                        ✓
                    </div>

                    <div class="status-content">

                        <h3>Order Confirmed</h3>

                        <p>
                            Your order has been confirmed.
                        </p>

                    </div>

                </div>


                <div class="status-line"></div>


                <div class="status-step current">

                    <div class="status-circle">
                        ●
                    </div>

                    <div class="status-content">

                        <h3>Processing</h3>

                        <p>
                            Your order is currently being processed.
                        </p>

                    </div>

                </div>


                <div class="status-line"></div>


                <div class="status-step">

                    <div class="status-circle">
                        4
                    </div>

                    <div class="status-content">

                        <h3>Ready for Delivery</h3>

                        <p>
                            Your order will be prepared for delivery.
                        </p>

                    </div>

                </div>


                <div class="status-line"></div>


                <div class="status-step">

                    <div class="status-circle">
                        5
                    </div>

                    <div class="status-content">

                        <h3>Delivered</h3>

                        <p>
                            Your order has been delivered.
                        </p>

                    </div>

                </div>

            </div>


            <!-- Customer -->

            <div class="tracking-customer">

                <h2>Customer Details</h2>

                <p>
                    <strong>Name:</strong>
                    ${order.customerName}
                </p>

                <p>
                    <strong>Phone:</strong>
                    ${order.customerPhone}
                </p>

                <p>
                    <strong>Address:</strong>
                    ${order.address},
                    ${order.city} -
                    ${order.pincode}
                </p>

            </div>


            <!-- Products -->

            <div class="tracking-products">

                <h2>Order Items</h2>

                ${order.items.map(function(item) {

                    return `

                        <div class="tracking-product">

                            <div>

                                <strong>
                                    ${item.name}
                                </strong>

                                <p>
                                    Quantity:
                                    ${item.quantity}
                                </p>

                            </div>

                            <strong>
                                ₹${(
                                    item.price *
                                    item.quantity
                                ).toLocaleString('en-IN')}
                            </strong>

                        </div>

                    `;

                }).join("")}

            </div>


            <div class="tracking-total">

                <span>Total Amount</span>

                <strong>
                    ₹${order.total.toLocaleString('en-IN')}
                </strong>

            </div>

        </div>

    `;

}

</script>


<?php
include 'includes/footer.php';
?>